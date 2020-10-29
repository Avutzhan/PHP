<?php


namespace App\ObjectPool;


use App\ObjectPool\Objects\Calculator;
use App\ObjectPool\Objects\CreditCard;
use App\User;

class ObjectPoolDemo
{
    private $objectPool;

    public function __construct()
    {
        $this->objectPool = ObjectPool::getInstance();

        $user = new User();
        $creditCard = new CreditCard();
        $calculator = new Calculator();

        $this->objectPool
            ->addObject($user)
            ->addObject($creditCard)
            ->addObject($calculator);

    }

    public function run()
    {
//        dd(__METHOD__, 1, $this->objectPool);

        $creditCard = $this->objectPool->getObject(CreditCard::class);
        $creditCard->cardId = '1111 2222 3333 4444';
        $creditCard->cardHolder = 'Card Holder';
        $creditCard->cardPwd = '123';

        $user = $this->objectPool->getObject(User::class);
        $user->name = 'User Name';

        $user2 = $this->objectPool->getObject(User::class);

//        dd(__METHOD__, 2, $this->objectPool, [$user, $user2, $creditCard]);

        $this->objectPool->release($creditCard);
        $this->objectPool->release($user);

//        dd(__METHOD__, 3, $this->objectPool, [$user, $user2, $creditCard]);

        $creditCard2 = $this->objectPool->getObject(CreditCard::class);
        $creditCard2->cardId = '5555 6666 7777 8888';
        $creditCard2->cardHolder = 'Card Holder2';
        $creditCard2->cardPwd = '123';

//        dd(__METHOD__, 4, $this->objectPool, [$creditCard, $user], $creditCard2);
    }
}
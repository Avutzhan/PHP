<?php


namespace App\SimpleFactory;

use App\SimpleFactory\Classes\EmailMessenger;
use App\SimpleFactory\Classes\SmsMessenger;
use App\SimpleFactory\Interfaces\MessengerSimpleFactoryInterface;

class MessengerSimpleFactory implements MessengerSimpleFactoryInterface
{
    public function build($type) //: MessengerInterface
    {
        switch ($type) {
            case 'email':
                $messenger = new EmailMessenger();
                $messenger
                    ->setSender('admin@local.com')
                    ->setMessage('Default email message');
                break;
            case 'sms':
                $messenger = new SmsMessenger();
                $messenger
                    ->setSender('87777777777')
                    ->setMessage('Default phone message');
                break;
            default:
                throw new \Exception('Не верный тип обьекта');

        }

        return $messenger;
    }
}
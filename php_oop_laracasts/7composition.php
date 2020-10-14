<?php

// Object Composition
// object composition and abstractions
// Let's move on to object composition.
// To break it down into the simplest of terms,
// composition is when one object holds a pointer
// to another object. This allows us to construct
// complex functionality by combining various types.

class Subscription
{
    protected $gateway;

    //public function __construct(StripeGateway $gateway)
    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {

    }
    public function cancel()
    {
        //$costumer = $this->gateway->findStripeCustomer();
        $this->gateway->findCustomer();
    }
    public function invoice()
    {

    }
    public function swap($newPlan)
    {

    }

}

// class BillableSubscription extends Subscription
// {
//   protected function findStripeCustomer()
//   {

//   }
//   protected function findStripeSubscriptionByCustomer()
//   {

//   }
// } not good naming

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {

    }
    public function findSubscriptionByCustomer()
    {

    }
}
class BrandGateway implements Gateway
{
    public function findCustomer()
    {

    }
    public function findSubscriptionByCustomer()
    {

    }
}

//new Subscription(new StripeGateway());
new Subscription(new BrandGateway());



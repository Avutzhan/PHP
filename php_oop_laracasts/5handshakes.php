<?php

//handshakes and interfaces
//сдесь ты должен изучить контрактное программирование чтобы понять что происходит в полной мере
//handshakes and interfaces
//что такое контрактные интерфейсы
// Think of an interface as a class with no behavior.
// Instead, it describes the terms for a particular contract.
// Any class that signs this contract must adhere to those terms.
// Let's review this idea using the example of a newsletter signup.

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    // protected $apiKey;

    // public function __construct($apiKey)
    // {
    //   $this->apiKey = $apiKey;
    // }

    public function subscribe($email)
    {
        die('subscribing with CampaignMonitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class NewsletterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        //$newsletter = new CampaignMonitor(config('services.cm.key'));
        $email = 'john@gmail.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController;

$controller->store(new Drip());
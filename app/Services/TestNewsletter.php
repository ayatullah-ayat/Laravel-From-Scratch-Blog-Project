<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class TestNewsletter
{
    public function subscribe(string $email)
    {
        $mailchimp = new ApiClient();
        
        $mailchimp->setConfig([
            'apiKey' => env('MAILCHIMP_KEY'),
            'server' => 'us14'
        ]);
        
        return $mailchimp->lists->addListMember('c32448cb23', [
            "email_address" => $email,
            "status" => "subscribed"
        ]);
    }
}

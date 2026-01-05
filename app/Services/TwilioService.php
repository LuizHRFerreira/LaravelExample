<?php

namespace App\Services;

use Twilio\Rest\Client;

class TwilioService
{
    private $client;
    private $sid;
    private $token;
    private $twilio_number;

    public function __construct()
    {
        $this->sid = config('app.twilio_sid');
        $this->token = config('app.twilio_auth_token');
        $this->twilio_number = config('app.twilio_number');
    }

    public function sendAuthenticationWhatsApp($to, $code)
    {
        // if (\App::Environment() !== 'production') return false;
        $twilio = new Client($this->sid, $this->token);

        try 
        {
            $message = $twilio
                        ->messages
                        ->create(
                            "whatsapp:".$to,
                            array(
                                "from" => "whatsapp:".$this->twilio_number,
                                "body" => "Spoten: Seu código de autenticação é ".$code,
                            )
                        );
            
            return true;
        } 
        catch (\Exception $error) { return $error; }
    }

    public function test()
    {
        dd(1);
    }
}

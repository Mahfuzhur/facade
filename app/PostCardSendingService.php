<?php

namespace App;

use Illuminate\Support\Facades\Mail;

class PostCardSendingService{
    private $country;
    private $width;
    private $height;
    public function __construct($country,$width,$height){
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message, $email){
        dd("The post card was sent with the message:". $message);
        Mail::raw($message, function ($message) use ($email){
            $message->to($email);
        });

        
    }
}
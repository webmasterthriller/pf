<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data){
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
      return $this->from('contact@pretetfinance-fr.com',$this->data['name'].' : Pretetfinance-FR')
      ->to('contact@pretetfinance-fr.com','Pretetfinance-FR')
      ->subject($this->data['subject'])
      ->view('templates.contact',['data'=>$this->data]);
    }
}

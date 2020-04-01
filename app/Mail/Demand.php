<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Demand extends Mailable
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
        return $this->from('contact@pretetfinance-fr.com',$this->data['nom'].' '.$this->data['prenom'])
            ->to('contact@pretetfinance-fr.com','pretetfinance-FR')
            ->view('templates.demand',['data'=>$this->data])
            ->subject('Nouvelle demande de crédit')
            ->replyTo($this->data['contactemail'],$this->data['nom'].' '.$this->data['prenom']);
    }
}

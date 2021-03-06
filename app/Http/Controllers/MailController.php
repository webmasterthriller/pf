<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use App\Mail\Demand;
use Mail;
/**
 * Class MailController
 * @package App\Http\Controllers
 */
class MailController extends Controller{

    public function contact(Request $request){
        Mail::send(new Contact($request->all()));
        return response()->json(['success'=>TRUE]);
    }

    public function demand(Request $request){
        Mail::send(new Demand($request->all()));
        return response()->json(['success'=>TRUE]);
    }
}

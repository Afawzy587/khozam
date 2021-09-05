<?php

namespace App\Http\Controllers;

use App\Http\Requests\addcotact_usrequest;
use App\Models\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact_usController extends Controller
{
    public function store(addcotact_usrequest $request)
    {
        $input = $request->all();
        $saved = ContactUS::create($input);
        if ($saved) {
            Mail::send('emails.contact', ['data'=>$input], function ($message) use($input){
                $message->to('info@khozamdevelopment.com', $input['name'])->subject($input['name'])->getSwiftMessage()
                    ->getHeaders()
                    ->addTextHeader('x-mailgun-native-send', 'true');
            });
            return response()->json(['message' => 'Success!']);
        }else{
            return response()->json(['message' => 'Error!']);
        }
    }

    public function contact_latter(Request $request)
    {
        $input = $request->all();
        $saved = ContactUS::create($input);
        if ($saved) {

            return response()->json(['message' => 'Success!']);
        }else{
            return response()->json(['message' => 'Error!']);
        }
    }
}

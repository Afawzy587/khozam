<?php

namespace App\Http\Controllers;

use App\Http\Requests\addcotact_us_buysrequest;
use App\Models\ContactUsBuy;
use Illuminate\Support\Facades\Mail;

class Contact_us_buysController extends Controller
{
    public function store(addcotact_us_buysrequest $request)
    {
        $input = $request->all();
        $saved = ContactUsBuy::create($input);
        if ($saved) {
            Mail::send('emails.buy', ['data'=>$saved], function ($message) use($saved){
                $message->to('info@khozamdevelopment.com', $saved['name'])->subject($saved['name'])->getSwiftMessage()
                    ->getHeaders()
                    ->addTextHeader('x-mailgun-native-send', 'true');
            });
            return response()->json(['message' => 'Success!']);
        }
    }
}

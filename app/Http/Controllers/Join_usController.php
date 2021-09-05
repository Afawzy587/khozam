<?php

namespace App\Http\Controllers;

use App\Http\Requests\addJoin_us_buysrequest;
use App\Models\Join_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Join_usController extends Controller
{
    public function store(addJoin_us_buysrequest $request)
    {
        $input = $request->all();
        $saved = Join_us::create($input);
        if ($saved) {
            Mail::send('emails.job', ['data'=>$input], function ($message) use($input){
                $message->to('info@khozamdevelopment.com', $input['name'])->subject($input['name'])->getSwiftMessage()
                    ->getHeaders()
                    ->addTextHeader('x-mailgun-native-send', 'true');
            });
            return response()->json(['message' => 'Success!']);
        }else{
            return response()->json(['message' => 'Error!']);
        }
    }
}

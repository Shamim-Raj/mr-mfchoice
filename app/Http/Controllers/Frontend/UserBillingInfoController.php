<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\UserBilling;
use Illuminate\Http\Request;

class UserBillingInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function store(Request $request)
    {
        $user_id = auth('customer')->id();
        $billing = UserBilling::where('user_id', $user_id)->latest()->first();

        if(!$billing){
            $request['user_id'] = $user_id;
            UserBilling::create($request->all() + [
                'address_1' => $request->billing_address
            ]);
        } else {
            $billing->update($request->all());
        }
    }
}

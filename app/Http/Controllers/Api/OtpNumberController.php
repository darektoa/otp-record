<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OtpNumber;
use Illuminate\Http\Request;

class OtpNumberController extends Controller
{
    public function index() {
        $otpNumbers = OtpNumber::paginate(20);

        return response()->json(['data' => $otpNumbers]);
    }


    public function store(Request $request) {
        $otpNumber = OtpNumber::create([
            'number' => $request->number,
            'otp_from' => $request->otp_from,
            'otp_number' => $request->otp_number,
            'datetime' => $request->datetime ?? now(),
        ]);

        return response()->json([
            'message' => 'Successfully added',
            'data' => $otpNumber,
        ]);
    }
}

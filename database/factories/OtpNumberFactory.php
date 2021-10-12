<?php

namespace Database\Factories;

use App\Models\OtpNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

class OtpNumberFactory extends Factory
{
    protected $model = OtpNumber::class;


    public function definition()
    {
        return [
            'number'        => $this->faker->name(),
            'otp_from'      => $this->faker->phoneNumber(),
            'otp_number'    => $this->faker->randomDigit(6),
        ];
    }
}

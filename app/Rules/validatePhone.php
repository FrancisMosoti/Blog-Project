<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class validatePhone implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        $kenyaNumberStr = $value;
        // dd($kenyaNumberStr);


            $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
            try {
                $kenyaNumberProto = $phoneUtil->parse($kenyaNumberStr, "KE");
                
                $isValid = $phoneUtil->isValidNumber($kenyaNumberProto);
                // var_dump($isValid); // true
                // Produces "+41446681800"
                $Phone = $phoneUtil->format($kenyaNumberProto, \libphonenumber\PhoneNumberFormat::E164);

                if($isValid){
                    return [
                        'phone' => substr($Phone, 1),
                        'status' => true
                    ];
                }

                    return [
                        'phone' => $Phone,
                        'status' => false
                    ];

            

            } catch (\libphonenumber\NumberParseException $e) {
                var_dump($e);
            }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}

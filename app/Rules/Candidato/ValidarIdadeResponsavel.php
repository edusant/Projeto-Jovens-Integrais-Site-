<?php

namespace App\Rules\Candidato;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Carbon;

class ValidarIdadeResponsavel implements Rule
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
        $idade = Carbon::parse($value)->age;
        if ($idade  < 18 || $idade > 80){
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Idade inválida';
    }
}

<?php

namespace App\Rules\Candidato;

use Illuminate\Contracts\Validation\Rule;

class ValidarTelefone implements Rule
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
        if(!is_numeric($value)) {
            return false;
          }
          if (strlen($value) <> 11 && strlen($value) <> 10){
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
        return 'número de telefone inválido';
    }
}

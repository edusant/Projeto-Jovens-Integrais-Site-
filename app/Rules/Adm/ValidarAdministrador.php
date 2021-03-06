<?php

namespace App\Rules\Adm;

use App\Models\Administrador;
use Illuminate\Contracts\Validation\Rule;

class ValidarAdministrador implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
        //
        $this->user_id = $user_id;
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
        $data = Administrador::where('user_id', '=', $this->user_id)->where('status', '=', 1)->first();
        return isset($data->id);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Acesso como administrador negado';
    }
}

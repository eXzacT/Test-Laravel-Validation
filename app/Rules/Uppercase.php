<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Closure;

class Uppercase implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail):void
    {
        if ($value[0] !== strtoupper($value[0])) {
            $fail('The :attribute does not start with an uppercased letter.');
        }
    }
}

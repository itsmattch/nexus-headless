<?php

namespace Itsmattch\NexusHeadless\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Str;

class Plural implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Str::plural($value) !== $value) {
            $fail('The :attribute must be plural.');
        }
    }
}

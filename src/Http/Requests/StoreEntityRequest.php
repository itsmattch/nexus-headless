<?php

namespace Itsmattch\NexusHeadless\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property ?string $name
 */
class StoreEntityRequest extends FormRequest
{
    public function rules(): array
    {
        return ['name' => 'required|string|lowercase|unique:Itsmattch\NexusHeadless\Models\Entity,name'];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => strtolower($this->name)
        ]);
    }
}

<?php

namespace Itsmattch\NexusHeadless\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property ?string $name
 * @property ?array<string> $keys
 */
class StoreBadgeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'entity_id' => 'required|integer|exists:Itsmattch\NexusHeadless\Models\Entity,id',
            'name' => 'required|string|lowercase',
            'keys' => 'required|array|min:1',
            'keys.*' => 'required|string|lowercase',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => strtolower($this->name),
            'keys' => array_unique(array_map('strtolower', $this->keys)),
        ]);
    }
}

<?php

namespace App\Http\Requests\Feed;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateFeedRequest
 */
class UpdateFeedRequest extends FormRequest
{
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->get('url');
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'url' => 'required|min:5'
        ];
    }
}

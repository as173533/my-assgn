<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTaskRequest extends FormRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|max:100',
            'status' => 'required',
            'priority' => 'required',
            'task_date' => 'required',
            'task_time' => 'required'
        ];
    }

}

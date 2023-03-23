<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use App\Model\UserDetails;
use App\Model\UserMaster;

class EditprofileRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gender' => 'required',
            'gurdian_name' => 'required',
            'dob' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'bank_account_number' => 'required',
            'bank_account_type' => 'required',
            'bank_ifsc_code' => 'required',
            'bank_name' => 'required',
            'bank_branch_name' => 'required',
            'pan' => 'required',
            'previous_job_experience' => 'required',
            'photo' => 'nullable|mimes:jpeg,jpg,png,svg',
            'govt_id_picture' => 'nullable|mimes:jpeg,jpg,png,svg',
            'bank_passbook_frontpage_image' => 'nullable|mimes:jpeg,jpg,png,svg',
            'cv' => 'nullable|mimes:pdf,docx,doc,txt',
        ];
    }

    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if (!empty($this->phone) && !preg_match('/^[1-9][0-9]*$/', $this->phone)) {
                $validator->errors()->add('phone', 'Please give a proper phone number.');
            }

            $user = UserMaster::findOrFail(Auth::guard('frontend')->user()->id);
            if ($user->email !== $this->email) {
                $checkUser = UserMaster::where('email', $this->email)->first();
                if (!empty($checkUser)) {
                    $validator->errors()->add('email', 'This email address already taken.');
                }
            }
            
        });
    }

}

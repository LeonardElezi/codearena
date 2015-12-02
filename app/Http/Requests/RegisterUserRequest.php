<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'first_name' => 'required|min:2|max:255',
			'email' => 'required|email|unique:users|max:255',
			'password' => 'required|min:6',
			'password_confirmation' => 'required|same:password'
		];
	}

}

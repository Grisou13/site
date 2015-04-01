<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Config;
class RegisterRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
    if(Config::get('auth.register.authorized')){
      if (in_array(@$_SERVER['REMOTE_ADDR'], Config::get('auth.register.whitelist'))) {
        return true;//ip is in whitelist
      }
    }
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
      "username"=>"required|min:6|unique:users",
      "displayName"=>"required|min:6|max:254|unique:users",
      "firstName"=>"required",
      "lastName"=>"required",
      "email"=>"required|email|unique:users",
			"password"=>"required|same:password_again"
		];
	}

}

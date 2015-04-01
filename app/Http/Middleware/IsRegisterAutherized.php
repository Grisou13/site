<?php namespace App\Http\Middleware;

use Closure;
use Config;
class IsRegisterAutherized {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
    if(Config::get('auth.register.authorized')){

      if (in_array(@$_SERVER['REMOTE_ADDR'], Config::get('auth.register.whitelist'))) {
        return $next($request);
      }
    }
		return app()->abort('403');
	}

}

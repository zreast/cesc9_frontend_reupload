<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class isAdmin {

	protected $auth;

	public function __construct(Guard $auth) {
		$this->auth = $auth;
	}

	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('/');
			}
		} else {
			if (!$this->auth->user()->isAdmin()) {
				return redirect()->guest('/');
			}
		}

		return $next($request);
	}

}
<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class UserAuthenticate extends Middleware
{
    protected function authenticate($request, array $guards)
    {
        
            if ($this->auth->guard('user')->check()) {
                return $this->auth->shouldUse('user');
            }

        $this->unauthenticated($request, ['user']);
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('index');
        }
    }
}

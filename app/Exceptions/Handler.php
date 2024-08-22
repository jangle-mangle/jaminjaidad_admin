<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Session;
use Exception;
use Request;
use Illuminate\Auth\AuthenticationException;
use Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        $guard = \Arr::get($exception->guards(), 0);
        // dd($guard);
        switch ($guard) {
            case 'api':
                Session::forget('url.intented'); 
                return response()->json(['error' => 'Unauthenticated.'], 401);
                break;
            case 'admin':
                Session::forget('url.intented');
                return redirect()->route('admin.login');
                break;
            case 'vendor':
                Session::forget('url.intented');
                return redirect()->route('vendor.login');
                break;
            default:
                Session::forget('url.intented');
                return redirect()->route('admin.login');
                break;
        }
    }
}

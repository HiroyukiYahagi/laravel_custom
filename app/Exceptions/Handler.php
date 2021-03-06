<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof AccessDeniedHttpException) {
            return $this->accessDenied($request, $exception);
        }
        return parent::render($request, $exception);
    }

    /**
     * 未認証でアクセスした際の処理
     *
     * jsonリクエストの場合は404エラーを返す
     * それ以外の場合は全てのガードからログアウトし、ログインページへリダイレクト
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception){
        if($request->expectsJson()) {
          return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        Auth::guard("web")->logout();

        switch($exception->guards()[0]){
        case 'web':
            return redirect()->route('admin.login');
        default:
            return redirect('/');
        }
    }

    /**
     * 認証済みユーザが権限不足のエンドポイントにアクセスした時のハンドリング
     *
     * jsonリクエストの場合は404エラーを返す
     * それ以外の場合は全てのガードからログアウトし、ログインページへリダイレクト
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    protected function accessDenied($request, AccessDeniedHttpException $exception){
        if($request->expectsJson()) {
          return response()->json(['error' => 'AccessDenied.'], 403);
        }

        Auth::guard("web")->logout();

        switch($exception->guards()[0]){
        case 'web':
            return redirect()->route('admin.login');
        default:
            return redirect('/');
        }
    }
}

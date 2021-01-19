<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        GeneralException::class,
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
     * @param Throwable $exception
     *
     * @return mixed|void
     * @throws Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Throwable $exception
     * @throws Throwable
     * @return Response
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof UnauthorizedException) {
            return redirect()
                ->route(homeRoute())
                ->withFlashDanger(__('No tienes permiso para acceder al recurso.'));
        }

        if ($exception instanceof AuthorizationException) {
            return response(view('errors.403'));
        }

        if ($exception instanceof TokenMismatchException) {
            return redirect()
                ->route('frontend.auth.login')
                ->withFlashDanger(__('Su sesión ha expirado. Favor iniciar sesión nuevamente.'));
        }

        if ($exception instanceof HttpException) {
            $statusCode = $exception->getStatusCode();

            if (view()->exists('errors.'.$statusCode)) {
                return response(view('errors.'.$statusCode, [
                    'msg' => $exception->getMessage(),
                    'code' => $statusCode,
                ]), $statusCode);
            }
        }

        if ($exception instanceof ModelNotFoundException) {
            return response(view('errors.404'));
        }

        return parent::render($request, $exception);
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

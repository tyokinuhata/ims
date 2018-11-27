<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

/**
 * ユーザタイプの違う画面にアクセスするのを防ぐミドルウェア
 *
 * Class AccessDifferentUserTypesGuards
 * @package App\Http\Middleware
 */
class AccessDifferentUserTypesGuards
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $url = explode('/', url()->current())[3];
        $type = Auth::user()->type;

        if (!($type === 'employee' && $url === 'admin') && $type !== $url) {
            return redirect("/403");
        }

        return $next($request);
    }
}

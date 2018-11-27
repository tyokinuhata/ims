<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

/**
 * 管理者のみ閲覧可能な画面に従業員がアクセスすることを防ぐミドルウェア
 *
 * Class AccessEmployeeToAdminGuards
 * @package App\Http\Middleware
 */
class AccessEmployeeToAdminGuards
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
        $type = Auth::user()->type;
        if ($type === 'employee')   return redirect('/admin/products');

        return $next($request);
    }
}

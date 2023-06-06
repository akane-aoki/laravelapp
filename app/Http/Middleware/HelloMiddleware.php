<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data = [
            ['name'=>'taro', 'mail'=>'tyaro@com'],
            ['name'=>'hanako', 'mail'=>'hanako@com'],
            ['name'=>'sachiko', 'mail'=>'sachiko@com'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}

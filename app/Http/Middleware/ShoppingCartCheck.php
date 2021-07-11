<?php

namespace App\Http\Middleware;

use Closure;

class ShoppingCartCheck
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
        if(\Cart::isEmpty()){
            return redirect('/product');
        }else{
            return $next($request);
        }
    }
}

<?php
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;


class ValidateUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $url = $request->input('img_url');

        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return redirect()
            ->back()
            ->withErrors(['img_url' => 'La URL de la imagen no es válida'])
            ->withInput();
            //return $next($request);
        }
        return $next($request);
    }
}
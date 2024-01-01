<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class tokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('token');
        $result = JWTToken::decodeToken($token);

        if ($result === "Unauthorized") {
            return redirect("/loginPage");
        } else {
  //  This line sets a custom HTTP header named 'email' in the request.
  //   It appears to retrieve the email information from the $result object  and assigns it to the 'email' header.
            $request->headers->set('email', $result->userEmail);
//            $request->headers->set('id', $result->id);

            return $next($request);
        }


    }
}

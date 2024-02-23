<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsStudentUser
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = $request->user();
        if(!$user)
        {
            return redirect()->route('login');
        }
        if(!$user->is_advisor)
        {
            return $next($request);
        }
        abort(401);
    }
}

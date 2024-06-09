<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserRedirect
{
    /**
     * Handle an incoming request.
     *
     */
    public function handle()
    {
        if(Auth::check())
        {
            $user = Auth::user();

            if($user->is_admin)
            {
                return redirect()->route('admin.dashboard');
            }
            else
            {
                return redirect()->route('student.dashboard');
            }
        }
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class CheckAgeAccess
{
    /**
     * Handle an incoming request.
     * Kiểm tra xem người dùng có >= 18 tuổi để vào trang đăng ký không
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu request có gửi lên số tuổi (ví dụ form đăng ký)
        if ($request->filled('age')) {
            $age = $request->input('age');
            
            // Nếu tuổi < 18
            if ($age < 18) {
                return response()->json([
            'message' => 'Access denied. You must be at least 18 years old to register.',
        ],403);
            }
        }
        
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitorModel\VisitorModel;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Create a new visitor record
        VisitorModel::create([
            "ip_address" => $request->ip(),
            "user_agent" => $request->header("User-Agent"),
            "visited_at" => now(),
        ]);

        return $next($request);
    }
}

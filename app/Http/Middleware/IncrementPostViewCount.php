<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class IncrementPostViewCount
{
   
    public function handle(Request $request, Closure $next): Response
    {

        if(request()->routeIs('.content_detail')){

            $slug = $request->route()->parameter('slug');
            if ($slug) {
                DB::table('news_and_stories')->where('slug',$slug)->increment('views');
            }
        }
        
        return $next($request);
    }
}

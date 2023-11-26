<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdditemMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response=$next($request);
        //return $response->setContent("Response from AddMidleware");
        
        $currentcontent= $response->getContent();
        $newcontent= $currentcontent . "Hello from add middleware";
        $response->setContent($newcontent);

        return $response;


    }
}

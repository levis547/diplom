<?php

namespace App\Http\Middleware;

use App\Models\TitlsPage;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SeoMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $url = $request->path();
        $seo = TitlsPage::where('page_url', $url)->first();
        if ($seo) {
            view()->share('meta_title', $seo->page_title);
            view()->share('meta_description', $seo->page_description);
        }
        return $next($request);
    }
}

<?php

namespace App\Providers;

use App\Models\TitlsPage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
class SeoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Request $request)
    {
        $url = $request->path();
        $seo = TitlsPage::where('page_url', $url)->first();

        // Если запись не найдена, проверяем наличие записи для 404
        if (!$seo) {
            $seo = TitlsPage::where('page_url', '404')->first();
        }

        view()->share('meta_title', $seo->page_title ?? 'default');
        view()->share('meta_description', $seo->page_description ?? 'default');
    }
}

<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function __invoke()
    {
        return SitemapGenerator::create(config('app.url'))
            ->getSitemap()
            ->toResponse(request());
    }
}

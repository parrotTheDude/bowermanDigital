<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function __invoke()
    {
        $sitemap = Sitemap::create();

        $pages = [
            ['url' => '/',                                      'priority' => 1.0,  'freq' => Url::CHANGE_FREQUENCY_WEEKLY],
            ['url' => '/services',                              'priority' => 0.9,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['url' => '/portfolio',                             'priority' => 0.9,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['url' => '/portfolio/vizzbud',                     'priority' => 0.8,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['url' => '/portfolio/that-disability-adventure-company', 'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['url' => '/portfolio/evie-graphic-design',         'priority' => 0.8,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
            ['url' => '/contact',                               'priority' => 0.7,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY],
        ];

        $now = Carbon::now();

        foreach ($pages as $page) {
            $sitemap->add(
                Url::create(url($page['url']))
                    ->setLastModificationDate($now)
                    ->setChangeFrequency($page['freq'])
                    ->setPriority($page['priority'])
            );
        }

        return $sitemap->toResponse(request());
    }
}

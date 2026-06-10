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

        // 'lastmod': update when the page's content actually changes.
        // Using real dates (not now()) so crawlers can trust the signal.
        $pages = [
            ['url' => '/',                                      'priority' => 1.0,  'freq' => Url::CHANGE_FREQUENCY_WEEKLY,  'lastmod' => '2026-04-13'],
            ['url' => '/services',                              'priority' => 0.9,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY, 'lastmod' => '2026-04-13'],
            ['url' => '/portfolio',                             'priority' => 0.9,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY, 'lastmod' => '2026-04-13'],
            ['url' => '/portfolio/vizzbud',                     'priority' => 0.8,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY, 'lastmod' => '2026-04-13'],
            ['url' => '/portfolio/that-disability-adventure-company', 'priority' => 0.8, 'freq' => Url::CHANGE_FREQUENCY_MONTHLY, 'lastmod' => '2026-04-13'],
            ['url' => '/portfolio/evie-graphic-design',         'priority' => 0.8,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY, 'lastmod' => '2026-04-13'],
            ['url' => '/contact',                               'priority' => 0.7,  'freq' => Url::CHANGE_FREQUENCY_MONTHLY, 'lastmod' => '2026-04-13'],
        ];

        foreach ($pages as $page) {
            $sitemap->add(
                Url::create(url($page['url']))
                    ->setLastModificationDate(Carbon::parse($page['lastmod']))
                    ->setChangeFrequency($page['freq'])
                    ->setPriority($page['priority'])
            );
        }

        return $sitemap->toResponse(request());
    }
}

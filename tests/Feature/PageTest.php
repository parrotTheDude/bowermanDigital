<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_homepage_loads(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('Bowerman');
    }

    public function test_services_page_loads(): void
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
    }

    public function test_contact_page_loads(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function test_portfolio_index_loads(): void
    {
        $response = $this->get('/portfolio');

        $response->assertStatus(200);
    }

    public function test_portfolio_tdac_loads(): void
    {
        $response = $this->get('/portfolio/that-disability-adventure-company');

        $response->assertStatus(200);
    }

    public function test_portfolio_vizzbud_loads(): void
    {
        $response = $this->get('/portfolio/vizzbud');

        $response->assertStatus(200);
    }

    public function test_portfolio_evie_loads(): void
    {
        $response = $this->get('/portfolio/evie-graphic-design');

        $response->assertStatus(200);
    }

    public function test_sitemap_loads(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'text/xml; charset=UTF-8');
    }

    public function test_nonexistent_page_returns_404(): void
    {
        $response = $this->get('/this-page-does-not-exist');

        $response->assertStatus(404);
    }
}

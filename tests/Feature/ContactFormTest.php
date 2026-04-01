<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * Valid form data for reuse across tests.
     */
    private function validFormData(array $overrides = []): array
    {
        return array_merge([
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'phone' => '0412345678',
            'message' => 'I would like to discuss a new project.',
            'company' => 'Smith Co',
            'project_type' => 'Website',
            'budget' => '$5k-$10k',
            'timeline' => '1-3 months',
            'website' => '',  // honeypot — must be empty
            'recaptcha_token' => 'test-token',
        ], $overrides);
    }

    public function test_contact_form_requires_name(): void
    {
        $response = $this->post('/contact', $this->validFormData(['name' => '']));

        $response->assertSessionHasErrors('name');
    }

    public function test_contact_form_requires_email(): void
    {
        $response = $this->post('/contact', $this->validFormData(['email' => '']));

        $response->assertSessionHasErrors('email');
    }

    public function test_contact_form_requires_valid_email(): void
    {
        $response = $this->post('/contact', $this->validFormData(['email' => 'not-an-email']));

        $response->assertSessionHasErrors('email');
    }

    public function test_contact_form_requires_message(): void
    {
        $response = $this->post('/contact', $this->validFormData(['message' => '']));

        $response->assertSessionHasErrors('message');
    }

    public function test_contact_form_rejects_long_name(): void
    {
        $response = $this->post('/contact', $this->validFormData([
            'name' => str_repeat('a', 121),
        ]));

        $response->assertSessionHasErrors('name');
    }

    public function test_contact_form_rejects_name_with_special_characters(): void
    {
        $response = $this->post('/contact', $this->validFormData([
            'name' => 'John<script>alert(1)</script>',
        ]));

        $response->assertSessionHasErrors('name');
    }

    public function test_contact_form_rejects_long_message(): void
    {
        $response = $this->post('/contact', $this->validFormData([
            'message' => str_repeat('a', 5001),
        ]));

        $response->assertSessionHasErrors('message');
    }

    public function test_honeypot_rejects_bot_submissions(): void
    {
        $response = $this->post('/contact', $this->validFormData([
            'website' => 'http://spam.com',
        ]));

        $response->assertSessionHasErrors('website');
    }

    public function test_contact_form_requires_recaptcha_token(): void
    {
        $response = $this->post('/contact', $this->validFormData([
            'recaptcha_token' => '',
        ]));

        $response->assertSessionHasErrors('recaptcha_token');
    }

    public function test_contact_form_is_throttled(): void
    {
        // Hit the endpoint 6 times — the 6th should be throttled (limit is 5 per minute)
        for ($i = 0; $i < 5; $i++) {
            $this->post('/contact', $this->validFormData());
        }

        $response = $this->post('/contact', $this->validFormData());

        $response->assertStatus(429);
    }

    public function test_contact_form_accepts_optional_phone(): void
    {
        $response = $this->post('/contact', $this->validFormData(['phone' => '']));

        // Should not have a phone error (phone is optional)
        $response->assertSessionDoesntHaveErrors('phone');
    }
}

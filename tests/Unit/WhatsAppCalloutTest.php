<?php

namespace Tests\Unit;

use App\Services\OllamaService;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

/**
 * Verify that the addWhatsAppCallout() method injects exactly five callouts
 * and builds links from the single central WhatsApp configuration.
 *
 * While no official number is provided, callouts degrade to non-link
 * contact text — never a wa.me link without a recipient and never a
 * legacy hardcoded number.
 */
class WhatsAppCalloutTest extends TestCase
{
    protected function getService(): OllamaService
    {
        return new OllamaService();
    }

    protected function invokeCallout(array $result, string $city = 'TestCity'): array
    {
        $service = $this->getService();
        $ref = new \ReflectionMethod($service, 'addWhatsAppCallout');
        $ref->setAccessible(true);

        return $ref->invoke($service, $result, $city);
    }

    public function test_inserts_five_callouts_using_central_phone(): void
    {
        Config::set('services.whatsapp.phone', '081299887766');

        $result = [
            'content' => "<p>Paragraf pertama.</p><p>Paragraf kedua.</p><p>Paragraf ketiga.</p>",
        ];

        $updated = $this->invokeCallout($result);

        $content = $updated['content'];
        $this->assertEquals(5, substr_count($content, 'not-prose'), 'Expected exactly five WhatsApp callouts');

        // The central configured phone (normalized) appears in every callout link.
        $this->assertStringContainsString('wa.me/6281299887766', $content);
    }

    public function test_without_configured_phone_callouts_are_non_link_text(): void
    {
        Config::set('services.whatsapp.phone', '');

        $result = [
            'content' => "<p>Paragraf pertama.</p><p>Paragraf kedua.</p><p>Paragraf ketiga.</p>",
        ];

        $updated = $this->invokeCallout($result);
        $content = $updated['content'];

        $this->assertEquals(5, substr_count($content, 'not-prose'), 'Callouts must still be present');

        // No broken recipient-less wa.me link and no tel: fallback.
        $this->assertStringNotContainsString('wa.me', $content);
        $this->assertStringNotContainsString('href=', $content);

        // Neutral non-link fallback copy is used instead.
        $this->assertStringContainsString('Hubungi admin untuk informasi konsultasi.', $content);
    }

    public function test_legacy_numbers_are_never_used_in_generated_callouts(): void
    {
        Config::set('services.whatsapp.phone', '');

        $result = ['content' => str_repeat('<p>Isi paragraf artikel.</p>', 8)];

        $updated = $this->invokeCallout($result);
        $content = $updated['content'];

        foreach (['08118500177', '081399810272', '087894580806', '087894580649', '628118500177', '6281399810272', '6287894580806', '6287894580649'] as $number) {
            $this->assertStringNotContainsString($number, $content, "Legacy number {$number} must never leak into generated content.");
        }
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function test_landing_page_renders_barakah_finance_content(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertSee('Barakah Finance');
        $response->assertSee('Rencanakan Keuangan,');
        $response->assertSee('Ikhtiarkan Keberkahan');
        $response->assertSee('Pilihan Program Sesuai Kebutuhanmu');
        $response->assertSee('Keuangan Pra-Nikah');
        $response->assertSee('Single dan Sandwich Generation');
        $response->assertSee('Pensiun dan Waris');
        $response->assertSee('Ustadz Sidiq');
        $response->assertSee('Daftar Worksheet &amp; Webinar Gratis', false);
    }

    public function test_registration_form_accepts_valid_submission(): void
    {
        $response = $this->post(route('registrations.store'), [
            'nama' => 'Ahmad Fauzi',
            'kontak' => '081234567890',
            'topik' => 'Worksheet Cek Kesehatan Keuangan Keluarga',
            'setuju' => '1',
        ]);

        $response->assertRedirect(route('home').'#daftar');
        $response->assertSessionHas(
            'pesan_sukses',
            'Terima kasih, Ahmad Fauzi! Pendaftaran untuk "Worksheet Cek Kesehatan Keuangan Keluarga" berhasil diterima.',
        );
    }

    public function test_registration_form_validates_required_fields(): void
    {
        $response = $this->from(route('home'))->post(route('registrations.store'), [
            'nama' => '',
            'kontak' => '',
            'topik' => 'Worksheet Cek Kesehatan Keuangan Keluarga',
        ]);

        $response->assertRedirect(route('home').'#daftar');
        $response->assertSessionHasErrors(['nama', 'kontak', 'setuju']);
    }
}

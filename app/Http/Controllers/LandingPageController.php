<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    /**
     * Display the Barakah Finance landing page.
     */
    public function index(): View
    {
        return view('home', [
            'pillars' => $this->getPillars(),
            'approaches' => $this->getApproaches(),
            'programs' => $this->getPrograms(),
            'webinars' => $this->getWebinars(),
            'trustValues' => $this->getTrustValues(),
            'founders' => $this->getFounders(),
            'topics' => StoreRegistrationRequest::availableTopics(),
        ]);
    }

    /**
     * Handle the registration form submission.
     */
    public function storeRegistration(StoreRegistrationRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // TODO: Simpan ke database menggunakan Model Registration atau kirim notifikasi email/WhatsApp saat sudah dinamis.
        $pesanSukses = sprintf(
            'Terima kasih, %s! Pendaftaran untuk "%s" berhasil diterima.',
            $validated['nama'],
            $validated['topik'],
        );

        return redirect(route('home').'#daftar')
            ->with('pesan_sukses', $pesanSukses);
    }

    /**
     * @return list<array{icon: string, line1: string, line2: string}>
     */
    private function getPillars(): array
    {
        return [
            ['icon' => 'users', 'line1' => 'Fokus', 'line2' => 'Keluarga Muslim'],
            ['icon' => 'scale', 'line1' => 'Berlandaskan', 'line2' => 'Prinsip Syariah'],
            ['icon' => 'sprout', 'line1' => 'Edukasi Praktis &', 'line2' => 'Bertahap'],
            ['icon' => 'shield', 'line1' => 'Transparan', 'line2' => 'dan Amanah'],
        ];
    }

    /**
     * @return list<array{icon: string, title: string, description: string}>
     */
    private function getApproaches(): array
    {
        return [
            [
                'icon' => 'mindset',
                'title' => 'Mindset yang Benar',
                'description' => 'Meluruskan cara pandang tentang harta, rezeki, dan keberkahan.',
            ],
            [
                'icon' => 'coins',
                'title' => 'Harta sebagai Amanah',
                'description' => 'Mengelola, melindungi, dan menyalurkan harta sesuai syariat.',
            ],
            [
                'icon' => 'stairs',
                'title' => 'Satu Langkah Bertahap',
                'description' => 'Materi yang praktis, aplikatif, dan bisa langsung dipraktikkan.',
            ],
        ];
    }

    /**
     * @return list<array{key: string, title: string, description: string, note: ?string, cta_label: string, cta_href: string}>
     */
    private function getPrograms(): array
    {
        return [
            [
                'key' => 'mandiri',
                'title' => 'Belajar Mandiri',
                'description' => 'Worksheet, e-book, template keuangan, dan rekaman webinar.',
                'note' => 'Produk berbayar segera hadir. Harga diumumkan saat peluncuran.',
                'cta_label' => 'Daftar minat produk digital',
                'cta_href' => '#daftar',
            ],
            [
                'key' => 'kelas',
                'title' => 'Kelas & Pendampingan',
                'description' => 'Webinar, kelas edukasi tematik, dan konsultasi perencanaan keuangan.',
                'note' => null,
                'cta_label' => 'Lihat Kelas & Webinar',
                'cta_href' => '#webinar',
            ],
            [
                'key' => 'kompetensi',
                'title' => 'Pengembangan Kompetensi',
                'description' => 'Program sertifikasi dan pelatihan perencanaan keuangan syariah dari IARFC Syariah, yang juga menaungi RIFA. Barakah Finance berperan sebagai perantara, bukan penyelenggara sertifikasi.',
                'note' => null,
                'cta_label' => 'Tanya program RFS & CIMM',
                'cta_href' => '#daftar',
            ],
        ];
    }

    /**
     * @return list<array{date: string, title: string, description: string, is_quote: bool, speakers: string}>
     */
    private function getWebinars(): array
    {
        return [
            [
                'date' => 'Sabtu, 16 Januari 2027',
                'title' => 'Single dan Sandwich Generation',
                'description' => '“Gaji cuma satu, yang minta banyak. Bagi uangnya gimana?”',
                'is_quote' => true,
                'speakers' => 'Narasumber: Icha dan Azrin, bersama Ustadz Faishal dan Aska',
            ],
            [
                'date' => 'Sabtu, 20 Februari 2027',
                'title' => 'Keuangan Pra-Nikah',
                'description' => 'Hak dan kewajiban keuangan suami dalam Islam.',
                'is_quote' => false,
                'speakers' => 'Ustadz Sidiq dan Aska, bersama Icha dan Azrin. Jam menyesuaikan Ramadan.',
            ],
            [
                'date' => 'Sabtu, 6 Maret 2027',
                'title' => 'Pensiun dan Waris',
                'description' => 'Arus kas yang tetap jalan, dan harta yang ditinggalkan.',
                'is_quote' => false,
                'speakers' => 'Narasumber: Ustadz Sidiq dan Azrin, bersama Icha, Ustadz Faishal, dan Aska',
            ],
        ];
    }

    /**
     * @return list<array{icon: string, title: string, description: string}>
     */
    private function getTrustValues(): array
    {
        return [
            [
                'icon' => 'fathonah',
                'title' => 'Fathonah: Jernih',
                'description' => 'Menyampaikan ilmu dengan bahasa sederhana dan mudah dipahami.',
            ],
            [
                'icon' => 'amanah',
                'title' => 'Amanah: Terpercaya',
                'description' => 'Menjaga data, layanan, dan batas kompetensi kami.',
            ],
            [
                'icon' => 'siddiq',
                'title' => 'Siddiq: Jujur',
                'description' => 'Tidak menjanjikan hasil dan transparan mengenai afiliasi.',
            ],
            [
                'icon' => 'tabligh',
                'title' => 'Tabligh: Praktis',
                'description' => 'Menyampaikan edukasi menjadi langkah nyata yang bisa diterapkan.',
            ],
        ];
    }

    /**
     * @return list<array{inisial: string, nama: string, bidang: string, bg: string, ringkasan: string}>
     */
    private function getFounders(): array
    {
        return [
            [
                'inisial' => 'US',
                'nama' => 'Ustadz Sidiq',
                'bidang' => 'Waris & Fikih Keluarga',
                'bg' => '#1b6048',
                'ringkasan' => 'Berfokus pada kajian fikih muamalah, hak dan kewajiban nafkah keluarga, serta pembagian waris sesuai syariat Islam.',
            ],
            [
                'inisial' => 'UF',
                'nama' => 'Ustadz Faishal',
                'bidang' => 'Zakat, Infak & Wakaf',
                'bg' => '#152e42',
                'ringkasan' => 'Membina pemahaman tentang pengelolaan zakat, infak, sedekah, dan wakaf agar harta tumbuh bersih dan penuh keberkahan.',
            ],
            [
                'inisial' => 'AZ',
                'nama' => 'Azrin',
                'bidang' => 'Investasi & Asuransi',
                'bg' => '#b89146',
                'ringkasan' => 'Mengedukasi prinsip proteksi risiko dan instrumen investasi syariah yang aman, terukur, dan sesuai profil kebutuhan keluarga.',
            ],
            [
                'inisial' => 'IC',
                'nama' => 'Icha',
                'bidang' => 'Perencanaan Keuangan',
                'bg' => '#646f7a',
                'ringkasan' => 'Mendampingi individu dan keluarga menyusun arus kas, dana darurat, serta tujuan keuangan bertahap yang aplikatif.',
            ],
            [
                'inisial' => 'AM',
                'nama' => 'Aska',
                'bidang' => 'Dinar, Emas & Pajak',
                'bg' => '#134736',
                'ringkasan' => 'Berbagi wawasan seputar lindung nilai berbasis emas/dinar serta tata kelola kepatuhan pajak untuk keluarga Muslim.',
            ],
        ];
    }
}

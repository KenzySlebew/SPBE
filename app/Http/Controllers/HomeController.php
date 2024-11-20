<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Announcement;
use App\Models\Infographic;

class HomeController extends Controller
{
    public function index()
    {
        $news = [
            [
                'title' => 'Implementasi SPBE di Kabupaten Banjar',
                'content' => 'Pemerintah Kabupaten Banjar terus meningkatkan pelayanan publik melalui implementasi SPBE...',
                'image' => 'news/spbe-implementation.jpg',
                'created_at' => now()
            ],
            [
                'title' => 'Pelatihan Digital untuk ASN',
                'content' => 'Program pelatihan digital untuk meningkatkan kompetensi ASN dalam penggunaan teknologi...',
                'image' => 'news/digital-training.jpg',
                'created_at' => now()->subDays(2)
            ]
        ];

        $announcements = [
            [
                'title' => 'Maintenance Sistem',
                'content' => 'Akan dilakukan pemeliharaan sistem pada tanggal 20 Juli 2024',
                'valid_until' => now()->addDays(30)
            ],
            [
                'title' => 'Pengumuman Layanan Baru',
                'content' => 'Telah dibuka layanan baru untuk pendaftaran online',
                'valid_until' => now()->addDays(60)
            ]
        ];

        return view('home', compact('news', 'announcements'));
    }
}
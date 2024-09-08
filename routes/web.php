<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama'=>'Futma'],['title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog', 'posts'=>[
        [
            'title' => 'Manfaat Olahraga Pagi untuk Kesehatan',
            'author' => 'Futma Nurhidayat',
            'body' => 'Olahraga pagi memberikan banyak manfaat untuk kesehatan fisik dan mental. Saat tubuh aktif di pagi hari, metabolisme menjadi lebih cepat dan tubuh membakar kalori dengan lebih efisien sepanjang hari. Selain itu, olahraga pagi dapat meningkatkan suasana hati karena produksi endorfin yang membuat tubuh merasa lebih bahagia dan berenergi.
            Tidak hanya bermanfaat bagi fisik, olahraga pagi juga bisa membantu menjaga kesehatan mental. Mengawali hari dengan aktivitas fisik terbukti mengurangi tingkat stres dan kecemasan. Dengan suasana hati yang lebih baik, seseorang bisa lebih fokus dan produktif dalam menjalani aktivitas harian.'
        ],

        [
            'title' => 'Pentingnya Pemrograman dalam Era Digital',
            'author' => 'Futma Nurhidayat',
            'body' => '<p>Pemrograman kini menjadi keterampilan yang sangat penting di era digital. Dengan kemampuan pemrograman, seseorang bisa menciptakan aplikasi, website, atau software yang memudahkan kehidupan sehari-hari. Selain itu, banyak industri yang kini sangat bergantung pada teknologi dan memerlukan programmer untuk mengembangkan solusi digital.
            Di dunia yang terus berkembang ini, keterampilan dalam pemrograman juga membuka banyak peluang karir. Profesi seperti web developer, data scientist, hingga software engineer kini menjadi pekerjaan yang sangat dicari. Menguasai pemrograman tidak hanya menawarkan keamanan karir, tetapi juga memberikan kemampuan untuk berinovasi di bidang teknologi.'
        ]

    ]]);
});

Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);
});

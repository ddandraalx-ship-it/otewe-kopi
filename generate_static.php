<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$menu = config('menu');

$cafe = [
    'name' => 'Otewe',
    'tagline' => 'NGOPI · MAKAN · GELATO',
    'phone_display' => '0813-2642-8553',
    'phone_wa' => '6281326428553',
    'instagram' => 'otewe.kopi',
    'hours' => [
        ['days' => 'Senin — Kamis', 'time' => '10.00 — 00.00 WIB'],
        ['days' => 'Jumat — Minggu', 'time' => '10.00 — 03.00 WIB'],
    ],
    'address' => 'Jl. Taman Apsari No. 25, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur',
    'maps_embed_src' => 'https://maps.google.com/maps?q=otewe%20kopi%20taman%20apsari%20surabaya&output=embed',
    'maps_link' => 'https://maps.google.com/?q=Otewe+Kopi+Taman+Apsari+Surabaya',
];

$html = view('home', compact('menu', 'cafe'))->render();

file_put_contents(__DIR__ . '/public/index.html', $html);
echo "Generated public/index.html successfully (" . strlen($html) . " bytes)\n";

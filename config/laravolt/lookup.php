<?php

return [
    'route' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
        'prefix' => '',
    ],
    'view' => [
        'layout' => 'laravolt::layouts.app',
    ],
    'menu' => [
        'enabled' => true,
    ],
    'permission' => [],
    'collections' => [
        // Sample lookup collections
        'pekerjaan' => [
            'label' => 'Pekerjaan',
        ],
        'verifikasi_berkas' => [
            'label' => 'Verifikasi Berkas',
        ],
        'verifikasi_teknis' => [
            'label' => 'Verifikasi Teknis',
        ],
    ],
];

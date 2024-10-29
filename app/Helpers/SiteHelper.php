<?php

namespace App\Helpers;

class SiteHelper
{
    const SITE_CONFIG = [
        'desentope.je' => [
            'title' => 'Desentope Je',
            'phone' => '15 99829-0671',
            'email' => 'contato@desentope.je',
            'ga' => 'UA-123456789-1',
        ],
        'desentupidorsorocaba.com.br' => [
            'title' => 'Desentupidor Sorocaba',
            'phone' => '15 99829-0671',
            'email' => 'contato@desentupidorsorocaba.com.br',
            'ga' => 'G-Q2SMPZKGSS',
        ],
        'joaodesentupidor.com.br' => [
            'title' => 'João Desentupidor em Sorocaba',
            'phone' => '15 99829-0671',
            'email' => 'contato@joaodesentupidor.com.br',
            'ga' => 'G-Q2SMPZKGSS',
        ],
    ];

    static function config($key): string
    {
        return self::SITE_CONFIG[request()->getHost()][$key];
    }

}
<?php

namespace App\Services;

use Google_Client;
use Google_Service_YouTube;

class GoogleClientService
{
    public static function getClient()
    {
        $client = new Google_Client();
        $client->setApplicationName('PROJECT1');
        $client->setScopes([
            'https://www.googleapis.com/auth/youtube.readonly', // Sesuaikan dengan scope yang Anda butuhkan
        ]);
        $client->setAuthConfig(storage_path('app/google-client-secret.json')); // Sesuaikan dengan path ke file konfigurasi Anda

        return $client;
    }
}

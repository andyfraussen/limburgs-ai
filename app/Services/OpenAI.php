<?php

namespace App\Services;

use GuzzleHttp\Client;

class OpenAI
{
    private $secret;
    private $client;
    private $base_url = 'https://api.openai.com/v1/';

    public function __construct()
    {
        $this->secret = env('OPENAI_SECRET');
        $this->client = $client = new Client();
    }

    public function complete($prompt, $temperature = 0.7, $max_tokens = 900)
    {
        $response = $this->client->post($this->base_url . 'completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->secret,
                'Content-Type' => 'application/json'
            ],
            'json' => [
                'model' => 'text-davinci-003',
                'prompt' => $prompt,
                'temperature' => $temperature,
                'max_tokens' => $max_tokens
            ]
        ]);

        return json_decode((string) $response->getBody(), true);
    }

    public function image($prompt){
        $response = $this->client->post($this->base_url . 'images/generations', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->secret,
                'Content-Type' => 'application/json'
            ],
            'json' => [
                'prompt' => $prompt,
                'n' => 1,
            ]
        ]);

        return json_decode((string) $response->getBody(), true);
    }
}

<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiService
{
    protected string $baseUrl;
    protected string $clientID;
    protected string $clientSecret;
    public function __construct()
    {
//        $this->baseUrl = config('');
//        $this->clientID = config('');
//        $this->clientSecret = config('');
    }


    public function authorizationCode($client) : array
    {
        try
        {
            //@todo add path to api here when its created
            $response = Http::asJson()->post("127.0.01:8080/oauth/v1/authorizationcode", [
                'atom_hash' => "has",
                'grant_type' => 'authorization_code',
                'client_id' => $client['client_id'],
                'client_secret' => $client['client_secret'],
            ]);
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
        return $response->json();
    }

    public function refreshToken($client, $authCode) : array
    {
        try
        {
            $response = Http::asJson()->post("127.0.01:8080/oauth/v1/accesstoken", [
                'atom_hash' => "has",
                'auth_code' => $authCode,
                'grant_type' => 'authorization_code',
                'client_id' => $client['client_id'],
                'client_secret' => $client['client_secret'],
            ]);
            dd(json_decode($response->body(), true));
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
        return $response->json();
    }

    public function generateClient()
    {
        $clientCredentials = [];
        try
        {
            $response = Http::asJson()->post("127.0.0.1:8080/oauth/v1/generate", [
                "atom_hash" => "hello",
                "client_id" => "clientid",
            ]);

            if($response->ok())
            {
               return $clientCredentials = $response->body();
            }
        } catch (\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e);
        }
    }

    public function generateModel(array $mapData)
    {
        $response = Http::asJson()->post("127.0.0.1:8080/models", [
            "data" => $mapData
        ]);
        return $response->body();
    }

    /**
     * Work flow for authcode regen for cybel
     * func exchange_authorization_code_for_token(code):
     * auth_code = find_authorization_code(code)
     * if auth_code is None or auth_code.is_used:
     * # Redirect to authentication if the code is invalid or used
     * redirect_to_authentication()
     * else:
     * # Mark the code as used in the database to prevent reuse
     * mark_code_as_used(auth_code)
     *
     * # Proceed to generate and send the access token to the client
     * access_token = generate_access_token_for_user(auth_code.user_id)
     * return access_token
 */
}

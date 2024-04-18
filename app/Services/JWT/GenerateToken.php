<?php

namespace App\Services\JWT;

use App\Models\User;
use Firebase\JWT\JWT;

class GenerateToken
{
    public static function new(User $user)
    {
        $payload = [
            'user' => $user,
            'exp' => time() + 36000,
        ];
        $secretKey = env('JWT_SECRET');
        return JWT::encode($payload, $secretKey, 'HS256');
    }
}

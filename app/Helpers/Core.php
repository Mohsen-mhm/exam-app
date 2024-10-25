<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Str;

class Core
{
    public static function generateUserCode($length = 10): string
    {
        $code = Str::password(length: $length, letters: false, symbols: false);
        $user = User::query()->where('code', $code)->first();
        if ($user) {
            return self::generateUserCode($length);
        }
        return $code;
    }

    public static function generateStrongPassword($length = 24): string
    {
        return Str::password(length: $length);
    }
}

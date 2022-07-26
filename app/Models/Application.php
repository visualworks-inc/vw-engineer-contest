<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    /**
     * 名前チェック
     *
     * @param string $name
     */
    public static function is_used_name(string $name): bool
    {
        $user = self::where('name', $name)->first();
        if (is_null($user)) {
            return false;
        }
        return true;
    }
}

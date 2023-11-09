<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait
{
    public static function bootUuidTrait()
    {
        static::creating(function ($model) {
            $model->incrementing = false; // Disable auto-incrementing
            $model->{$model->getKeyName()} = Str::uuid()->toString();
        });
    }

    public function getKeyType()
    {
        return 'string';
    }
}

?>
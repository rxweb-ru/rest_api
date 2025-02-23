<?php

namespace App\Models\Concerns;

use Illuminate\Support\Str;

trait UseUuid
{
    protected static function bootUsesUuid(): void
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}

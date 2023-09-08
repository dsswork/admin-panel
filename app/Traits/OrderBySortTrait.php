<?php


namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait OrderBySortTrait
{
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('sort');
        });
    }
}

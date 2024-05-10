<?php

namespace App\Traits;

use App\Models\BillType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait WithExpenses
{
    use DimeUtilsTrait;

    public function scopeWithExpenses(Builder $query): Builder
    {
        $relationships = (Cache::get('bill_types') ?? BillType::all())
            ->pluck('slug')
            ->map(
                fn ($slug) => Str::snake(Str::camel($slug))
            );

        if ($relationships->isNotEmpty()) {
            return $query->with($relationships->toArray());
        }

        return $query;
    }
}

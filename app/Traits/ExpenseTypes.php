<?php

namespace App\Traits;

use App\Models\BillType;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait ExpenseTypes
{
    /**
     * @return array<string, array<int, array<string, string>>>
     */
    public function getAllExpenseTypes(): array
    {
        return (Cache::get('bill_types') ?? BillType::all())
            ->reduce(function ($result, $item) {
                $modelName = "{$item->model}Type";
                $model = "App\\Models\\{$modelName}";
                $result[Str::snake(Str::camel($item->slug))] = class_exists($model)
                    ? (new $model())->get()->toArray()
                    : [];
                return $result;
            }, []);
    }
}

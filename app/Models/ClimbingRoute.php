<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

use App\Enums\ClimbingRouteGradeEnum;
use App\Enums\ClimbingRouteTypeEnum;

class ClimbingRoute extends Model
{
    use HasUuids;

    protected function casts(): array
    {
        return [
            'grade' => ClimbingRouteGradeEnum::class,
            'type' => ClimbingRouteTypeEnum::class,
        ];
    }
}

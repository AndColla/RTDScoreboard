<?php

namespace App\Enums;

enum ClimbingRouteTypeEnum: int
{
    case Lead = 0;
    case TopRope = 1;

    public function getLabel(): string
    {
        return match ($this) {
            self::Lead => 'Lead',
            self::TopRope => 'Top Rope',
        };
    }
}

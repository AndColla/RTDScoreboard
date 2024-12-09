<?php

namespace App\Enums;

enum ClimbingRouteGradeEnum: string
{
    case One = '1';
    case Two = '2';
    case Three = '3';
    case FourA = '4a';
    case FourAPlus = '4a+';
    case FourB = '4b';
    case FourBPlus = '4b+';
    case FourC = '4c';
    case FourCPlus = '4c+';
    case FiveA = '5a';
    case FiveAPlus = '5a+';
    case FiveB = '5b';
    case FiveBPlus = '5b+';
    case FiveC = '5c';
    case FiveCPlus = '5c+';
    case SixA = '6a';
    case SixAPlus = '6a+';
    case SixB = '6b';
    case SixBPlus = '6b+';
    case SixC = '6c';
    case SixCPlus = '6c+';
    case SevenA = '7a';
    case SevenAPlus = '7a+';
    case SevenB = '7b';
    case SevenBPlus = '7b+';
    case SevenC = '7c';
    case SevenCPlus = '7c+';
    case EightA = '8a';
    case EightAPlus = '8a+';
    case EightB = '8b';
    case EightBPlus = '8b+';
    case EightC = '8c';
    case EightCPlus = '8c+';

    public function getScore(): int
    {
        return match ($this) {
            self::One, self::Two, self::Three => 0,
            self::FourA, self::FourAPlus, self::FourB, self::FourBPlus, self::FourC, self::FourCPlus, self::FiveA, self::FiveAPlus, self::FiveB, self::FiveBPlus, self::FiveC, self::FiveCPlus => 1,
            self::SixA, self::SixAPlus, self::SixB, self::SixBPlus => 2,
            self::SixC, self::SixCPlus, self::SevenA, self::SevenAPlus => 3,
            self::SevenB, self::SevenBPlus, self::SevenC, self::SevenCPlus => 4,
            self::EightA, self::EightAPlus, self::EightB, self::EightBPlus => 5,
            self::EightC, self::EightCPlus => 6,
        };
    }

    public function getMultiplier(): float
    {
        return match ($this) {
            self::One, self::Two, self::Three, self::FourA, self::FourAPlus, self::FourB, self::FourBPlus, self::FourC, self::FourCPlus, self::FiveA, self::FiveAPlus, self::FiveB, self::FiveBPlus, self::FiveC, self::FiveCPlus => 1,
            self::SixA, self::SixAPlus, self::SixB, self::SixBPlus => 1.1,
            self::SixC, self::SixCPlus, self::SevenA, self::SevenAPlus => 1.2,
            self::SevenB, self::SevenBPlus, self::SevenC, self::SevenCPlus => 1.3,
            self::EightA, self::EightAPlus, self::EightB, self::EightBPlus => 1.4,
            self::EightC, self::EightCPlus => 1.5,
        };
    }
}

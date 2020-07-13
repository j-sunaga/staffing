<?php

namespace App\Enums;

use BenSampo\Enum\Enum;
use Lang;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CheckPriority extends Enum
{
    const Low = 0;
    const Middle = 1;
    const High = 2;

    public static function getDescription($value): string
    {
        if (Lang::has('enum.check_priority_' . $value)) {
            return Lang::get('enum.check_priority_' . $value);
        }
        return parent::getDescription($value);
    }
}

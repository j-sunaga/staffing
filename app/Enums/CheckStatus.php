<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CheckStatus extends Enum
{
    const Pending = 0;
    const Enabled = 1;
    const Completed = 2;

    // public static function getDescription($value): string
    // {
    //     if (Lang::has('enum.check_post_data.' . $value)) {
    //         return Lang::get('enum.check_post_data.' . $value);
    //     }
    //     return parent::getDescription($value);
    // }
}

<?php

namespace App\Models;

use App\Enums\CheckPriority;
use BenSampo\Enum\Traits\CastsEnums;
use App\Enums\CheckStatus;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    use CastsEnums;

    protected $enumCasts = [
        'status' => CheckStatus::class, // Example enum cast
        'priority' => CheckPriority::class,
    ];

    protected $casts = [
        'status' => 'int',
        'priority' => 'int',
    ];
}

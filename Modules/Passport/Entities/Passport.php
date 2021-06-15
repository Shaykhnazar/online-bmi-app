<?php

namespace Modules\Passport\Entities;

use App\Models\BaseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Passport extends BaseModel
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = ['code', 'type_id', 'expired_at', 'user_id', 'params'];

    protected $casts = [
        'params' => 'array',
        'expired_at' => 'date'
    ];

    /**
     * Passports belongTo types.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PassportType::class);
    }

    /**
     * Passports belongTo user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory()
    {
        return \Modules\Passport\Database\factories\PassportFactory::new();
    }
}

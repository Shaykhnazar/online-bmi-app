<?php

namespace Modules\Ticket\Entities;

use App\Models\BaseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Passport\Entities\PassportType;

class Ticket extends BaseModel
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = ['user_id', 'pass_type_id', 'created_by', 'status', 'params'];

    protected $casts = [
        'params' => 'array'
    ];

    /**
     * Ticket belongTo user.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Ticket belongTo user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Ticket belongTo passport_types.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PassportType::class, 'pass_type_id');
    }

}

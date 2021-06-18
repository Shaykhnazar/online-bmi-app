<?php

namespace Modules\Baholash\Entities;

use App\Models\BaseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Mavzular\Entities\Mavzu;

class StudentRates extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'student_rates';

    protected $fillable = ['student_id', 'teacher_id', 'theme_id', 'k1', 'k2', 'k3', 'k4'];


    /**
     * @return BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id');
    }


    /**
     * @return BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    /**
     * @return BelongsTo
     */
    public function theme(): BelongsTo
    {
        return $this->belongsTo(Mavzu::class, 'theme_id');
    }
}

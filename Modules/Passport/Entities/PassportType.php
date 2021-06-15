<?php

namespace Modules\Passport\Entities;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PassportType extends BaseModel
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'passport_type';

    protected $fillable = ['name'];

    /**
     * Types has Many passports.
     */
    public function passports(): HasMany
    {
        return $this->hasMany('Modules\Passport\Entities\Passport');
    }

}

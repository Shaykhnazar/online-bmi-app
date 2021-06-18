<?php

namespace Modules\Mavzular\Entities;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mavzu extends BaseModel
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'mavzular';

    protected $fillable = ['mavzu'];

}

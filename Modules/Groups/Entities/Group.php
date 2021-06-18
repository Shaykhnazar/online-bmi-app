<?php

namespace Modules\Groups\Entities;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends BaseModel
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = ['group_name'];

}

<?php

namespace Modules\Tasks\Entities;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'percent', 'deadline'];

//    protected static function newFactory()
//    {
//        return \Modules\Tasks\Database\factories\TaskFactory::new();
//    }
}

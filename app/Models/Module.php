<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';
    protected $fillable = ['name'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

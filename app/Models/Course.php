<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Module;

class Course extends Model
{
    use HasFactory, UuidTrait;
    public $incrementing = false;
    protected $keyType = 'uuid';

    protected $fillable = ['name', 'description', 'image'];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}

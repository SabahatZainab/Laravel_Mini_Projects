<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Traits\UuidTrait;

class School extends Model
{
    use HasFactory, UuidTrait;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','name','city','date'];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    
    public function imageable()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}

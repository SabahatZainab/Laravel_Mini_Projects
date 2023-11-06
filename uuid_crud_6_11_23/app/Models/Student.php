<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Student extends Model
{
    use HasFactory, UuidTrait;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','name','father_name','address','class','profile','school_id'];
    
    
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function imageable()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}

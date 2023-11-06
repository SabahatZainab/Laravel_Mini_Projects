<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Traits\UuidTrait;

class Image extends Model
{
    use HasFactory, UuidTrait;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','image','imageable_id', 'imageable_type'];
    public function imageable()
    {
        return $this->morphTo();
    }
}

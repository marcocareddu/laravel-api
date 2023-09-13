<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'url',
        'description',
        'thumb',
        'type_id'
    ];

    public function thumb()
    {
        return Attribute::make(
            get: fn ($value) => asset('storage/' . $value)
        );
    }

    // Define Releation - Depends on type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // Many to Many on Technology
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}

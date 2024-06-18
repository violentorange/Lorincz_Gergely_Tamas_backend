<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'kategoriak';
    public $timestamps = false;

    protected $guarded = [];

    public function estates(): HasMany
    {
        return $this->hasMany(Estate::class, 'kategoria', 'id');
    }
}

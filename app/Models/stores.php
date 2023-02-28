<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stores extends Model
{
    use HasFactory;

    protected $table = 'stores';

    protected $fillable = [
        'title',
        'description',
        'email',
        'status',
        'password',
    ];

    protected $hidden = ['password'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

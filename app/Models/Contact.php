<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'name', 'mobile', 'email', 'group'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')->orwhere('mobile', 'like', '%' . request('search') . '%');
        }
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
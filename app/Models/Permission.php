<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'description'];
    use HasFactory;

    public function userPermissions() {
        return $this->belongsTo(User_Permission::class);
    }
}
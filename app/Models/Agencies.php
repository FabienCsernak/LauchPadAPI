<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'country', 'creation', 'description'];

    
    public function launcher()
    {
        return $this->belongsTo(Agencies::class, 'name', 'agency_name');
    }

    public function launchers()
    {
        return $this->hasMany(Launcher::class);
    }
}

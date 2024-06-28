<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launchers extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'agency_id', 'description', 'status', 'price', 'diameter', 'height', 'LEO', 'GTO', 'stage', 'liftoff_thrust'];

    
    public function agency() {
        return $this->belongsTo(Agencies::class, 'agency_name', 'name');
    }
}

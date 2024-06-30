<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launcher extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['agency_id', 'name', 'description', 'status', 'price', 'diameter', 'height', 'LEO', 'GTO', 'stage', 'liftoff_thrust'];
    
    public function agency() {
        return $this->belongsTo(Agencies::class, 'agency_name', 'name');
    }

    public function type()
    {
        return $this->belongsTo(LauncherType::class);
    }
}

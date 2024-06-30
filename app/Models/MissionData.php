<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionData extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['agency_id', 'count_mission', 'mission_success', 'mission_faillure', 'mission_partial_faillure'];
}

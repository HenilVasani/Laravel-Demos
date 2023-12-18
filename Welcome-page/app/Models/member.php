<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $table='member';
    public $timestamps=false;
    public function getFullNameWithPrefixAttribute()
    {
    
        return $this->first_name . ' ' . $this->last_name;
        
    }
}

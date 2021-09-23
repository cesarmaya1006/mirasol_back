<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Parqueadero extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'parqueaderos';
    protected $guarded = [];
    //----------------------------------------------------------------------------------
    public function parqueos()
    {
        return $this->hasMany(Parqueo::class, 'parqueadero_id', 'id');
    }
    //----------------------------------------------------------------------------------
}

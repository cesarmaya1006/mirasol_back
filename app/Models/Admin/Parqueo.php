<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Parqueo extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'parqueos';
    protected $guarded = [];
    //----------------------------------------------------------------------------------
    public function casa()
    {
        return $this->belongsTo(Casa::class, 'casa_id', 'id');
    }
    //----------------------------------------------------------------------------------
    public function parqueadero()
    {
        return $this->belongsTo(Parqueadero::class, 'parqueadero_id', 'id');
    }
}

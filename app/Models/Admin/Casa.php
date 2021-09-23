<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Casa extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'casas';
    protected $guarded = [];
    //----------------------------------------------------------------------------------
    public function parqueos()
    {
        return $this->hasMany(Parqueo::class, 'casa_id', 'id');
    }
    //----------------------------------------------------------------------------------
}

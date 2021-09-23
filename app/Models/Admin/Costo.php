<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Costo extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'costos';
    protected $guarded = [];
}

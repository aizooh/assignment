<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obituary extends Model
{
    public $table='obituaries';
    public $primaryKey='ID';
    public  $incementing=true;
    public $timestamps =false;  
}

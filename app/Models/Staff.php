<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
   use HasFactory;

   const MANAGEMENT_MEMBER =  'management';
   const BOARD_MEMBER = 'board';

   
    protected $guarded = [];
}

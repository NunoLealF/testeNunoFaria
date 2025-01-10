<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    
    // A nossa tabela não tem timestamps (updated_at e created_at); por isso,
    // de acordo com o StackOverflow, temos de fazer isto:

    public $timestamps = false;

}

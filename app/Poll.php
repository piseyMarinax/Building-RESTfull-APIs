<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function path()
    {
        return '/polls/'.$this->id;
    }
}

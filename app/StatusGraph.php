<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusGraph extends Model
{
    public function status() {
        return $this->hasOne('App\Status', 'id', 'status_to');
    }
}

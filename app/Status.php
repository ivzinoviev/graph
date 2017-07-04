<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function action() {
        return $this->hasMany(\App\StatusAction::class);
    }

    public function graph() {
        return $this->hasMany(\App\StatusGraph::class);
    }
}

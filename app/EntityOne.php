<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Graph;

class EntityOne extends Model
{
    use Graph;

    protected $fillable = ['color', 'size'];

    protected $table = 'entity_one';

    // We can reduce amount of methods by implementing graph actions attributes as model
    // Those methods should be treated as demo
    public function makeDefault() {
        $this->update([
            'color' => null,
            'size' => null
        ]);
    }

    public function makeBig() {
        $this->update([
            'size' => 'btn-lg'
        ]);
    }

    public function makeRed() {
        $this->update([
            'color' => 'btn-danger',
        ]);
    }

    public function makeSmall() {
        $this->update([
            'size' => 'btn-sm'
        ]);
    }

    public function makeGreen() {
        $this->update([
            'color' => 'btn-success',
        ]);
    }

    public function makeYellow() {
        $this->update([
            'color' => 'btn-warning',
        ]);
    }
}

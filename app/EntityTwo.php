<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Graph;

class EntityTwo extends Model
{
    use Graph;

    protected $fillable = ['value'];

    protected $table = 'entity_two';

    public function increaseValue() {
        $this->update([
            'value' => ++$this->value
        ]);
    }

    public function decreaseValue() {
        $this->update([
            'value' => --$this->value
        ]);
    }
}

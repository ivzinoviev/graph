<?php

namespace App\Traits;

trait graph {
    public function getStatus() {
        return $this->belongsTo('App\Status', 'status_id');
    }

    public function setStatus($id) {
        if($this->isStatusAvailable($id)) {
            $this->status_id = $id;
            $this->callActions();
            $this->save();
            return $this;
        }

        throw new \Exception('Can\'t set status ' . $id);
    }

    public function getStatusesList() {
        return $this->getStatus()->first()->graph()->with('status')->get();
    }

    public function isStatusAvailable($id) {
        return (bool)$this->getStatus()->first()->graph()->where('status_to', $id)->count();
    }

    protected function callActions() {
        foreach($this->getStatus()->first()->action()->get() as $action) {
            if(method_exists($this, $action->action)) {
                // We can implement method arguments later as new model
                $this->{$action->action}();
            } else {
                throw new \Exception(get_class($this) . ' doesn\'t have method ' . $action->action);
            }
        }
    }
}
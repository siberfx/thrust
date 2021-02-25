<?php

namespace BadChoice\Thrust\Actions;

use Illuminate\Support\Collection;

class Deactivate extends Action
{
    public $needsConfirmation = true;
    public $title             = 'Deactivate';
    public $icon              = 'times';
    public $field             = 'active';

    public function handle(Collection $objects)
    {
        $this->getAllObjectsQuery($objects)->update([
            $this->field => false
        ]);
        /*$objects->each(function($object){
            $object->update([$this->field => false]);
        });*/
    }
    public function getTitle()
    {
        if ($this->icon) {
            return icon($this->icon) . __("thrust::messages.deactivate");
        }
        return __("thrust::messages.deactivate");
    }
}

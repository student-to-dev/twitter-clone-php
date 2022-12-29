<?php

namespace App\Http\Livewire;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Statuses extends Component
{
    public Model $model;
    public string $field;
    public bool $isOn;

    public function mount()
    {
        $this->isOn = (bool) $this->model->getAttribute($this->field);
    }
    public function render()
    {
        return view('livewire.statuses');
    }
    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}

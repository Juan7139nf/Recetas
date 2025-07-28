<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectField extends Component
{
    public $colrow;
    public $id;
    public $name;
    public $label;
    public $wireModel;
    public $options; // array de opciones con 'label' y 'value'
    public $placeholder;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $colrow = 'm-3',
        $id = '',
        $name = '',
        $label = '',
        $wireModel = '',
        $options = [],
        $placeholder = 'Seleccione una opción'
    ) {
        $this->colrow = $colrow;
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->wireModel = $wireModel;
        $this->options = $options;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select-field');
    }
}

<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $colrow;
    public $id;
    public $name;
    public $label;
    public $wireModel;
    public $placeholder;
    public $type;
    public $icon;
    public $viewBox;
    public $other;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $colrow = 'm-3',
        $id = '',
        $name = '',
        $label = '',
        $wireModel = '',
        $placeholder = '',
        $type = 'text',
        $icon = '',
        $viewBox = '0 0 16 16',
        $other = ''
    ) {
        $this->colrow = $colrow;
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->wireModel = $wireModel;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->icon = $icon;
        $this->viewBox = $viewBox;
        $this->other = $other;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input-field');
    }
}

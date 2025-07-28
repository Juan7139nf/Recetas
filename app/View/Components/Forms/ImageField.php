<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageField extends Component
{
    public $wireModel;
    public $existingImage;
    public $label;

    /**
     * Create a new component instance.
     */
    public function __construct($wireModel = '', $existingImage = null, $label = null)
    {
        $this->wireModel = $wireModel;
        $this->existingImage = $existingImage;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.image-field');
    }
}

<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $principal;
    public $url;
    public $secondary;
    public $urlSecondary;
    public $name;
    public $accion;
    public $urlAccion;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $principal = 'dashboard',
        $url = null,
        $secondary = '',
        $urlSecondary = '',
        $name = '',
        $accion = '',
        $urlAccion = ''
    ) {
        $this->principal = $principal;
        $this->url = $url ?? route('admin.dashboard');
        $this->secondary = $secondary;
        $this->urlSecondary = $urlSecondary;
        $this->name = $name;
        $this->accion = $accion;
        $this->urlAccion = $urlAccion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.breadcrumb');
    }
}

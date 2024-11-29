<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    public $titulo ;
    public $encabezado ;
    public $textoboton;
    /**
     * Create a new component instance.
     */
    public function __construct($titulo,$encabezado,$textoboton)
    {
        $this->titulo = $titulo;
        $this->encabezado = $encabezado;
        $this->textoboton = $textoboton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Tarea;

class TareaFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     * @param \App\Models\Tarea $tarea;
     * @return void
     */
    public function __construct($tarea = null)
    {
        if(is_null($tarea)){
            $tarea = Tarea::make([
                'urgencia' => 0,
                'finalizado' => null
            ]);
        }
        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $param = [
            'tarea' => $this->tarea,
            'urgencias' => Tarea::URGENCIAS,
        ];
        return view('components.tarea-form-body',$param);
    }
}

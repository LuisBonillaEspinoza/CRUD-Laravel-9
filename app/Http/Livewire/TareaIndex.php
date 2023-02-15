<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tarea;
use Livewire\WithPagination;

class TareaIndex extends Component
{
    public $busqueda = '';

    use WithPagination;
    public $paginacion = 1;
    public $paginationTheme = 'bootstrap';

    protected $queryString = [
        'busqueda' => ['except' => ''],
        'paginacion' => ['except' => 1],
    ];

    public function render()
    {
        $tarea = $this->consulta();
        $tarea = $tarea->paginate($this->paginacion);
        if($tarea->currentPage() > $tarea->lastPage()){
            $this->resetPage();
            $tarea = $this->consulta();
            $tarea = $tarea->paginate($this->paginacion);
        }
        $params = [
            'tarea' => $tarea,
        ];
        return view('livewire.tarea-index',$params);
    }

    private function consulta(){
        $query = Tarea::orderByDesc('id');
        if($this->busqueda != ''){
            $query->where('nombre','LIKE','%'.$this->busqueda.'%');
        }
        return $query;
    }
}

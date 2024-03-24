<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Redirect;
use App\Models\Profissionais;
use App\Models\Category_Service;
use App\Models\Service;
use App\Models\Category;
use Livewire\Component;

class CardUserProfissional extends Component
{
    public $id;
    public $idsClicados = [];
    public $nome = null;
    public $categoria = null;
    public $id_profissional = null;
    public $pagedate = null;

    public function handleClick($id)
    {
        $this->id = $id;
        $profissional = Profissionais::find($id);

        if ($profissional) {
            $this->nome = $profissional->nome;
            $this->categoria = $profissional->categoria;
            $this->id_profissional = $profissional->id;
        } else {
            abort(404, 'Profissional não encontrado');
        }
    }

    public function handleClickService($serviceId)
    {
        $index = array_search($serviceId, $this->idsClicados);

        if ($index !== false) {
            unset($this->idsClicados[$index]);
        } else {
            $this->idsClicados[] = $serviceId;
        }
    }

    public function handleClickNext()
    {
        $this->pagedate = 1;
    }

    public function RetorneClick()
    {
        $this->pagedate = null;

    }

    public function render()
    {
        $profissionais = Profissionais::all();
        $category_service = Category_Service::all();
        $service = Service::all();
        $category = Category::all();
        return view('livewire.card-user-profissional', compact('profissionais', 'category', 'service', 'category_service'));
    }
}

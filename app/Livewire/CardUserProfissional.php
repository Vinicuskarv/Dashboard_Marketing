<?php

namespace App\Livewire;

use App\Models\Profissionais;
use Livewire\Component;

class CardUserProfissional extends Component
{
    public $id;

    public function handleClick($id)
    {
        $this->id = $id;
        $profissional = Profissionais::find($id);

        // Verifique se o profissional foi encontrado
        if ($profissional) {
            // Faça algo com o profissional encontrado, como passá-lo para a visão
            $this->nome = $profissional->nome;
            $this->categoria = $profissional->categoria;
        } else {
            // Se o profissional não for encontrado, faça algo, como retornar uma mensagem de erro
            // Por exemplo, redirecione para uma página de erro
            abort(404, 'Profissional não encontrado');
        }
    }
    public function render()
    {
        $profissionais = Profissionais::all();
        return view('livewire.card-user-profissional', compact('profissionais'));
    }
}

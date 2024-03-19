<?php
namespace App\Http\Controllers;

use App\Models\Profissional;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function index()
    {
        $profissionais = Profissional::all();
        return view('profissionais', ['profissionais' => $profissionais]);
    }
}

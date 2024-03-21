<?php
namespace App\Http\Controllers;

use App\Models\Profissionais;
use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    public function index()
    {
        $profissionais = Profissionais::all();
        return view('welcome', compact('profissionais'));
    }
}

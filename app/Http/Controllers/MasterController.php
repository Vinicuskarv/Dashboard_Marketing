<?php
namespace App\Http\Controllers;

use App\Models\Profissionais;
use App\Models\Category_Service;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $profissionais = Profissionais::all();
        $category_service = Category_Service::all();
        $service = Service::all();
        $category = Category::all();

        return view('welcome', compact('profissionais', 'category', 'service', 'category_service'));
    }
}

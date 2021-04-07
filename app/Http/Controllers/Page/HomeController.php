<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\Provincia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('page.index');
    }
    public function bim(){
        return view('page.bim');
    }
    public function landingbim(){
        return view('page.landing-bim');
    }
    public function ubigeoDe(){
        $departamento = Departamento::with('provincia.distrito')->get();
        return json_encode(
            $departamento
        );
    }

    public function ubigeoPr(){
        $provincia = Provincia::all();
        return json_encode(
            $provincia
        );
    }

    public function ubigeoDi(){
        $distrito = Distrito::all();
        return json_encode(
            $distrito
        );
    }
}

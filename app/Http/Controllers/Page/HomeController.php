<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\LandingBim;
use App\Models\Portafolio;
use App\Models\PortafolioImagen;
use App\Models\Provincia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
    public function landingpmi(){
        return view('page.landing-pmi');
    }
    public function construccion(){
        $portafolio = Portafolio::all();
        return view('page.construccion', compact('portafolio'));
    }
    public function construccion_detail(Request $request){
        $por_img = PortafolioImagen::all();
        $portafolio = Portafolio::where('id', $request->id)->get();
        return view('page.construccion-img', compact('portafolio', 'por_img'));
    }
    public function ubigeoDe(){
        $departamento = Departamento::with('provincia.distrito')->get();
        return json_encode(
            $departamento
        );
    }
    public function metodos_pagos(){
        return view('page.metodos-pagos');
    }
    public function about(){
        return view('page.about');
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

    public function bim_register_landing(Request $request){
//        $from = 'hidalgochponce@gmail.com';
        $nombre = $request->form_data['nombre'];
        $celular = $request->form_data['celular'];
        $email = $request->form_data['email'];
        $departamento = $request->form_data['departamento'];
        $provincia = $request->form_data['provincia'];
        $distrito = $request->form_data['distrito'];
        $estado = $request->form_data['estado'];

        $landing = new LandingBim();
        $landing->nombre = $nombre;
        $landing->email = $email;
        $landing->telefono = $celular;
        $landing->departamento = $departamento;
        $landing->provincia = $provincia;
        $landing->distrito = $distrito;
        $landing->estado = $estado;
        $landing->save();

        try {
            Mail::send(['html' => 'notifications.page'], ['name' => $nombre], function ($messaje) use ($email, $nombre) {
                $messaje->to($email, $nombre)
                    ->subject('STARKING7')
                    /*->attach('ruta')*/
                    ->from('gerenciatic@starking7.com', 'STARKING7');
            });

            return "ok";
        }
        catch (Exception $e){
            return $e;
        }


    }

    public function pmi_register_landing(Request $request){
//        $from = 'hidalgochponce@gmail.com';
        $nombre = $request->form_data['nombre'];
        $celular = $request->form_data['celular'];
        $email = $request->form_data['email'];
        $departamento = $request->form_data['departamento'];
        $provincia = $request->form_data['provincia'];
        $distrito = $request->form_data['distrito'];

        $landing = new LandingBim();
        $landing->nombre = $nombre;
        $landing->email = $email;
        $landing->telefono = $celular;
        $landing->departamento = $departamento;
        $landing->provincia = $provincia;
        $landing->distrito = $distrito;
        $landing->estado = 2;
        $landing->save();

        try {
            Mail::send(['html' => 'notifications.page'], ['name' => $nombre], function ($messaje) use ($email, $nombre) {
                $messaje->to($email, $nombre)
                    ->subject('STARKING7')
                    /*->attach('ruta')*/
                    ->from('gerenciatic@starking7.com', 'STARKING7');
            });

            return "ok";
        }
        catch (Exception $e){
            return $e;
        }


    }

    public function formulario(Request $request){
        $from = "gerenciatic@starking7.com";
        $email = $request->email;
        $name = $request->name;
        $mensaje = $request->mensaje;

        try {
            Mail::send(['html' => 'notifications.page'], ['name' => $name], function ($messaje) use ($email, $name) {
                $messaje->to($email, $name)
                    ->subject('STARKING7')
                    ->from('gerenciatic@starking7.com', 'STARKING7');
            });

            Mail::send(['html' => 'notifications.admin'], [
                'email' => $email,
                'name' => $name,
                'messages' => $mensaje
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'STARKING7')
                    ->subject('STARKING7')
                    ->from('gerenciatic@starking7.com', 'STARKING7');
            });


            return redirect(route('landingbim'))->with('status', 'Registro satisfactorio.');

        }
        catch (Exception $e){
            return $e;
        }
//        return view('page.index');
    }
}

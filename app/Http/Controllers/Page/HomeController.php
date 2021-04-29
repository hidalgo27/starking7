<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Distrito;
use App\Models\LandingBim;
use App\Models\Provincia;
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
        return view('page.construccion');
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

        $landing = new LandingBim();
        $landing->nombre = $nombre;
        $landing->email = $email;
        $landing->telefono = $celular;
        $landing->departamento = $departamento;
        $landing->provincia = $provincia;
        $landing->distrito = $distrito;
        $landing->estado = 1;
        $landing->save();

        try {
            Mail::send(['html' => 'notifications.page'], ['name' => $nombre], function ($messaje) use ($email, $nombre) {
                $messaje->to($email, $nombre)
                    ->subject('STARKING7 | BIM EN EDIFICACIONES')
                    /*->attach('ruta')*/
                    ->from('gerenciatic@starking7.com', 'STARKING7 | BIM EN EDIFICACIONES');
            });

//            Mail::send(['html' => 'notifications.admin'], [
//                'phone' => $celular,
//                'email' => $email,
//                'name' => $nombre,
//                'departamento' => $departamento,
//                'provincia' => $provincia,
//                'distrito' => $distrito
//            ], function ($messaje) use ($from) {
//                $messaje->to($from, 'STARKING7 | BIM EN EDIFICACIONES')
//                    ->subject('STARKING7 | BIM EN EDIFICACIONES')
////                    ->cc($from2, 'GotoPeru')
//                    /*->attach('ruta')*/
//                    ->from('gerenciatic@starking7.com', 'STARKING7 | BIM EN EDIFICACIONES');
//            });


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
                    ->subject('STARKING7 | BIM EN EDIFICACIONES')
                    ->from('gerenciatic@starking7.com', 'STARKING7 | BIM EN EDIFICACIONES');
            });

            Mail::send(['html' => 'notifications.admin'], [
                'email' => $email,
                'name' => $name,
                'messages' => $mensaje
            ], function ($messaje) use ($from) {
                $messaje->to($from, 'STARKING7 | BIM EN EDIFICACIONES')
                    ->subject('STARKING7 | BIM EN EDIFICACIONES')
                    ->from('gerenciatic@starking7.com', 'STARKING7 | BIM EN EDIFICACIONES');
            });


            return redirect(route('landingbim'))->with('status', 'Registro satisfactorio.');

        }
        catch (Exception $e){
            return $e;
        }
//        return view('page.index');
    }
}

@extends('layouts.default')
@section('preloader')
    <div id="preloader"></div>
@endsection
@section('content')
    <section class="faq-section faq-secound-home-version backgroud-style">
        <div class="container">
            <div class="section-title mb45 headline text-center">
                <span class="subtitle text-uppercase">STARKING7</span>
{{--                <h2><span class="text-warning">¡INSCRIBETE YA!</span></h2>--}}
                <h2><span>FORMAS DE PAGO</span></h2>
            </div>

            <div class="section-title-2 mb65 headline text-left "  >
                <div class="row">
                    <div class="col">
                        <h2 class="text-white"><span>Depósitos.</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/bcp.png')}}" alt="">
                                <table class="table table-dark">
                                    <tr>
                                        <td>CUENTA EN DOLARES BCP:</td>
                                        <td>285-2632748-1-09</td>
                                    </tr>
                                    <tr>
                                        <td>CCI:</td>
                                        <td>00228500263274810954</td>
                                    </tr>
                                </table>
                                <p class="text-white">STARKING7 SAC</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="text-white"><span>Depósitos.</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/interbank.png')}}" alt="">
                                <table class="table table-dark">
                                    <tr>
                                        <td>CUENTA EN SOLES INTERBANK: (CAMBIO PARALELO):</td>
                                        <td>420-3001785620</td>
                                    </tr>
                                    <tr>
                                        <td>CCI:</td>
                                        <td>003-420-003001785620-71</td>
                                    </tr>
                                </table>
                                <p class="text-white">SG7 CONSTRUCCION Y BIENES RAICES
                                    STARKING7 SAC</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col">
                        <h2 class="text-white"><span>PAYPAL.</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/paypal.png')}}" alt="">
                                <a href="https://www.paypal.com/paypalme/starking7" class="font-weight-bold text-warning"> https://www.paypal.com/paypalme/starking7</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="text-white"><span>EN EFECTIVO O TARJETA:</span></h2>
                        <div class="row mt-5">
                            <div class="col">
                                <img src="{{asset('img/logo/mastervisa.png')}}" alt="" class="float-right">
                                <p class="text-white"><b>Oficinas:</b></p>
                                <ul>
                                    <li class="text-white">Av. Micaela Bastidas 258 Of. 606 Edificio El Roble Wanchaq, Cusco, Perú</li>
                                    <li class="text-white">230 S Broad St. 17th floor, Of. 19, Philadelphia, PA, 19102, Estados Unidos</li>
                                </ul>
                                <p class="text-white">Tarjetas de crédito Visa o MasterCard</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <h4 class="text-white">RESERVA DE MATRICULA</h4>
                    <p class="text-light">Reserva tu matrícula con estos sencillos pasos. ¡VACANTES LIMITADAS!</p>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="card bg-primary">
                                <div class="card-body text-white font-weight-bold text-center">
                                    1. REALIZA EL DEPOSITO O TRANSFERENCIA
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card bg-info">
                                <div class="card-body text-white font-weight-bold text-center">
                                    2. ENVIANOS LA FOTO DEL VOUCHER O CAPTURA
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="card bg-success">
                                <div class="card-body text-center text-white font-weight-bold">
                                    3. COMPLETA EL FORMULARIO DE MATRICULA
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-danger mt-5">Nota:</h5>
                    <p class="text-white">Envía de voucher al WhatsApp: <a href="https://api.whatsapp.com/send?phone=51932295953" target="_blank" class="btn btn-link">932295953</a> o al correo gerencia@starking7.com, una vez recibido y corroborado el voucher, te enviaremos el formulario para completar tu matrícula.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

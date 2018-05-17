@extends('layouts.app') @section('content')
<section class="main-content settings_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <a href="{{ url('/settings') }}" class="go-back">
                    <i class="fas fa-angle-left"></i> {{ __('Definições') }}</a>
                <h2 class="page-title">{{ __('Geral') }}</h2>
            </div>
            <div class="col-xs-12 col-xs-offset-0 col-lg-10 col-lg-offset-1">
                <form action="" method="post" class="row form edit_general_settings_page" name="edit_general_settings_form" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="edit_">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="table-items">
                            <div class="row divided">
                                <div class="col-lg-5">
                                    <h4 class="strong">{{ __('Dados do Website') }}</h4>
                                    <small>{{ __('Seus clientes vao usar estes dados para te contactar') }}</small>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-field">
                                        <label for="platform_name">{{ __('Nome do Website') }}</label>
                                        <input type="text" id="platform_name" name="platform_name" class="form-control">
                                    </div>
                                    <br>
                                    <div class="form-field">
                                        <label for="account_email">{{ __('Conta de Email') }}</label>
                                        <input type="text" id="account_email" name="account_email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row divided">
                                <div class="col-lg-5">
                                    <h4 class="strong">{{ __('Endereços do Website') }}</h4>
                                    <small>{{ __('Este endereço irá aparecer nas suas faturas') }}</small>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-field">
                                        <label for="legal_name_business">{{ __('Nome legal do negócio') }}</label>
                                        <input type="text" id="legal_name_business" name="legal_name_business" class="form-control">
                                    </div>
                                    <br>
                                    <div class="form-field">
                                        <label for="phone_business">{{ __('Telefone') }}</label>
                                        <input type="text" id="phone_business" name="phone_business" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons-top buttons-top-absolute">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8 col-lg-10">
                                    <span id="status-info">Dados por guardar</span>
                                </div>
                                <div class="col-sm-2 col-lg-1">
                                    <a href="#" title="Cancelar" class="btn btn-default decline">Cancelar</a>
                                </div>
                                <div class="col-sm-2 col-lg-1">
                                    <button type="submit" title="Guardar" name="save_data" class="btn btn-primary save">Guardar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
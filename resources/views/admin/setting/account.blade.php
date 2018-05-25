@extends('layouts.admin') @section('content')
<section class="main-content settings_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <a href="{{ route('settings') }}" class="go-back">
                    <i class="fas fa-angle-left"></i> {{ __('Definições') }}</a>
                <h2 class="page-title">{{ __('Geral') }}</h2>
            </div>
            <div class="col-xs-12 col-xs-offset-0 col-lg-10 col-lg-offset-1">
                <form action="" method="post" name="form_profile" class="table-items clearfix form form--profile" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6 col-sm-6">
                            <div class="form-field">
                                <label for="username">
                                    {{ __('Nome de Utilizador') }}
                                </label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 col-sm-6">
                            <div class="form-field">
                                <label for="email_address">
                                    {{ __('Email de Utilizador') }}
                                </label>
                                <input type="text" name="email_address" id="email_address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- /password reset -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-field">
                                <label for="password_reset">{{ __('Password') }}
                                    <br>
                                    <small>{{__('Altere sua password para entrar no seu painel administrativo do website')}}</small>
                                </label>
                                <input type="text" id="password_reset" name="password_reset" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-field">
                                <label for="user_about">
                                    <h3 class="cart__title">{{ __('Sobre mim') }}</h3>
                                    <small>{{__('Este texto irá ser apresentado na página de sobre')}}</small>
                                </label>
                                <textarea name="user_about" id="user_about" class="text-editor"></textarea>
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
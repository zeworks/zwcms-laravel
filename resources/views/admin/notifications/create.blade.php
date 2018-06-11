@extends('layouts.admin') @section('content')
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- button go back -->
                <a href="{{ route('notifications') }}" class="go-back">
                    <i class="fas fa-angle-left"></i> {{ __('Notificações') }}</a>
                <!-- button go back ends -->
                <!-- page title -->
                <h2 class="page-title">{{ __('Enviar Notificação')}}</h2>
                <!-- page title ends -->
                <!-- form to add notification -->
                <form action="" method="post" class="row form" enctype="multipart/form-data">
                    @csrf
                    @include('admin.notifications._form')
                </form>
                <!-- form to add notification ends -->
            </div>
        </div>
    </div>
</section>
@endsection
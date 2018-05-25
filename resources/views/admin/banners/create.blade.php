@extends('layouts.admin') @section('content')
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- button go back -->
                <a href="{{ route('banners') }}" class="go-back">
                    <i class="fas fa-angle-left"></i> {{ __('Banners') }}</a>
                <!-- button go back ends -->
                <!-- page title -->
                <h2 class="page-title">{{ __('Adicionar Banner')}}</h2>
                <!-- page title ends -->
                <!-- form to add banner -->
                @include('admin.banners._form')
                <!-- form to add banner ends -->
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app') @section('content')
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- button go back -->
                <a href="{{ route('templates') }}" class="go-back">
                    <i class="fas fa-angle-left"></i> {{ __('Templates') }}</a>
                <!-- button go back ends -->
                <!-- page title -->
                <h2 class="page-title">{{ __('Adicionar Template')}}</h2>
                <!-- page title ends -->
                <!-- form to add template -->
                @include('admin.templates._form')
                <!-- form to add template ends -->
            </div>
        </div>
    </div>
</section>
@endsection
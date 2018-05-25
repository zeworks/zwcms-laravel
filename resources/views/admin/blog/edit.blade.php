@extends('layouts.admin') @section('content')
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- button go back -->
                <a href="{{ route('blog') }}" class="go-back">
                    <i class="fas fa-angle-left"></i> {{ __('Blog') }}</a>
                <!-- button go back ends -->
                <!-- page title -->
                <h2 class="page-title">{{ __('Editar Post')}}</h2>
                <!-- page title ends -->
                <!-- form to add banner -->
                @include('admin.blog._form')
                <!-- form to add banner ends -->
            </div>
        </div>
    </div>
</section>
@endsection
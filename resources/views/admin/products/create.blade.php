@extends('layouts.admin') @section('content')
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- button go back -->
                <a href="{{ route('products') }}" class="go-back">
                    <i class="fas fa-angle-left"></i> {{ __('Produtos') }}</a>
                <!-- button go back ends -->
                <!-- page title -->
                <h2 class="page-title">{{ __('Adicionar Produto')}}</h2>
                <!-- page title ends -->
                <!-- form to add banner -->
                <form action="{{ route('product_insert') }}" method="post" class="row form" enctype="multipart/form-data">
                    @csrf
                    @include('admin.products._form')
                </form>
                <!-- form to add banner ends -->
            </div>
        </div>
    </div>
</section>
@endsection
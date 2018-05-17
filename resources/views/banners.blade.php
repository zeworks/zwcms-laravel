@extends('layouts.app') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Banners') }}</h2>
                <!-- page title ends -->
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="#" title="add banner" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Add Banner') }}
                    </a>
                </div>
                <!-- button to add new banner ends -->
                <div class="table-items">
                    <h3 class="strong">{{ __('Banners') }}</h3>
                    <div class="row">
                        <!-- banner item  -->
                        <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
                            <div class="cart-thumb cart-thumb--detail" style="background-image: url('https://dummyimage.com/398x200/f3f3f3/000')">
                                <div class="cart-thumb__info">
                                    <h4>
                                        Banner Title
                                    </h4>
                                    <p>
                                        Banner text
                                    </p>
                                    <div class="cart-thumb__actions">
                                        <form action="" method="post">
                                            <button type="submit" name="remove_banner" title="Remove">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        <form action="" method="post">
                                            <button type="submit" name="edit_banner" title="Edit">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner item ends -->
                        <!-- banner item  -->
                        <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
                            <div class="cart-thumb cart-thumb--detail" style="background-image: url('https://dummyimage.com/398x200/f3f3f3/000')">
                                <div class="cart-thumb__info">
                                    <h4>
                                        Banner Title
                                    </h4>
                                    <p>
                                        Banner text
                                    </p>
                                    <div class="cart-thumb__actions">
                                        <form action="" method="post">
                                            <button type="submit" name="remove_banner" title="Remove">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        <form action="" method="post">
                                            <button type="submit" name="edit_banner" title="Edit">
                                                <i class="far fa-edit"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner item ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
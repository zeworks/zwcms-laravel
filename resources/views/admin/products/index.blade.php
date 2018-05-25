@extends('layouts.admin') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Produtos') }}</h2>
                <!-- page title ends -->
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('product_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Produto') }}
                    </a>
                </div>
                <!-- button to add new banner ends -->
                <div class="table-items">
                    <!-- search -->
                    <form method="post" action="" class="search search--users active">
                        <input type="text" name="search" placeholder="Procurar..." class="form-control search__input">
                        <button type="submit" class="search__btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <br>
                    <br>
                    <!-- search ends -->
                    <!-- templates list -->
                    <table class="table-items__table with--image">
                        <tr>
                            <th>
                                <!-- image if exist -->
                            </th>
                            <th>Produto</th>
                            <th>Data de Registo</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        <tr class="item-table">
                            <td>
                                <a href="{{ route('product_edit') }}" class="go-back">
                                    <img src="{{ asset('img/zwlogo.png') }}" class="rounded" width="40" height="40" alt="zwlogo.png">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('product_edit') }}" class="go-back">Nome do Template</a>
                            </td>
                            <td>12/05/2018</td>
                            <td>
                                <div class="status status--sucss">
                                    Activo
                                </div>
                                <div class="status status--warn">
                                    Inactivo
                                </div>
                            </td>
                            <td class="last-item-table">
                                <form action="" method="post">
                                    <input type="hidden" class="form-control" name="id_product" value="">
                                    <button type="submit" name="remove_publication_btn" class="link" title="Remover">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <!-- templates list ends -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
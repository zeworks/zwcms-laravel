@extends('layouts.app') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Discontos') }}</h2>
                <!-- page title ends -->
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('discount_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Disconto') }}
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
                    <table class="table-items__table">
                        <tr>
                            <th>CODE</th>
                            <th>Discount Value</th>
                            <th>Start Date</th>
                            <th>Finish Date</th>
                            <th>Status</th>
                        </tr>
                        <tr class="item-table">
                            <td>
                                <a href="{{ route('discount_edit') }}" class="go-back">#Discount1</a>
                            </td>
                            <td>10%</td>
                            <td>20:53 19/01/2017</td>
                            <td>20:53 25/01/2017</td>
                            <td>
                                <div class="status status--sucss">
                                    Ativo
                                </div>
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
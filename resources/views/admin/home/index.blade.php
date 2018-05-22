@extends('layouts.app') @section('content')
<?php
    $date = new DateTime('now', new DateTimeZone('Europe/Lisbon'));
    $pieces = explode(":",$date->format('H:i:s'));
    $full_date = $date->format('H:i:s');
    $time_text = "";

    if($full_date >= "12:00:00" && $full_date <= "23:59:59"){
        $time_text = "Boa tarde";
    }else{
        $time_text = "Bom dia";
    }
?>
    <div class="main-content dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <!-- dashboard -->
                    <!-- user info -->
                    <div class="row">
                        <div class="col-lg-12">
                            <br>
                            <br>
                            <h3>{{$time_text}},
                                <strong>{{ Auth::user()->name }}</strong>
                            </h3>
                            <p>{{ __('Veja o que está a acontecer neste momento no seu website!') }}</p>
                        </div>
                    </div>
                    <!-- user info ends -->
                    <br>
                    <br>
                    <h2 class="page-title">{{ __('Painel de Controlo') }}</h2>
                    <!-- website status -->
                    <div class="row match-height">
                        <!-- total visitors -->
                        <div class="col-sm-3">
                            <div class="cart">
                                <h3 class="cart__title">
                                    Total Visitors
                                </h3>
                                <p class="cart__percentage">
                                    2
                                </p>
                                <img class="img-responsive cart__image" src="{{ asset('/img/www.png') }}" alt="www">
                            </div>
                        </div>
                        <!-- total visitors ends -->
                        <!-- social network -->
                        <div class="col-sm-3">
                            <div class="cart">
                                <h3 class="cart__title">
                                    Social Network
                                </h3>
                                <ul class="clearfix">
                                    <li class="fleft">
                                        <p class="cart__percentage">
                                            <span>
                                                <i class="fab fa-facebook-f"></i>
                                                <br> 2
                                            </span>
                                            
                                        </p>
                                    </li>
                                    <li class="fleft">
                                        <p class="cart__percentage">
                                            <span>
                                                <i class="fab fa-twitter"></i>
                                                <br> 10
                                            </span>
                                        </p>
                                    </li>
                                    <li class="fleft">
                                        <p class="cart__percentage">
                                            <span>
                                                <i class="fab fa-google-plus-g"></i>
                                                <br> 5
                                            </span>
                                        </p>
                                    </li>
                                </ul>
                                <img class="img-responsive cart__image" src="{{ asset('/img/heart.png') }}" alt="heart">
                            </div>
                        </div>
                        <!-- social network ends -->
                        <!-- total sales -->
                        <div class="col-sm-3">
                            <div class="cart">
                                <h3 class="cart__title">
                                    Total Sales
                                </h3>
                                <p class="cart__percentage">85</p>
                                <img class="img-responsive cart__image" src="{{ asset('/img/sales.png') }}" alt="sales">
                            </div>
                        </div>
                        <!-- total sales ends -->
                        <!-- total orders -->
                        <div class="col-sm-3">
                            <div class="cart">
                                <h3 class="cart__title">
                                    Total Orders
                                </h3>
                                <p class="cart__percentage">85</p>
                                <img class="img-responsive cart__image" src="{{ asset('/img/cart.png') }}" alt="orders">
                            </div>
                        </div>
                        <!-- total orders ends -->
                    </div>
                    <!-- website status ends -->
                    <!-- messages and orders -->
                    <div class="row match-height">
                        <!-- /messages -->
                        <div class="col-xs-12 col-sm-6">
                            <h2 class="page-title">
                                {{ __('Messages')}}
                                <small class="caps">[{{ __('Received')}}:
                                    <strong>70</strong>]</small>
                            </h2>
                            <div class="table-items">
                                <form method="post" action="" class="search search--users active">
                                    <input type="text" name="search" placeholder="{{ __('Search') }}..." class="form-control search__input">
                                    <button type="submit" class="search__btn">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <br>
                                <br>
                                <table class="table-items__table">
                                    <tr>
                                        <th>{{ __('Subject') }}</th>
                                        <th>{{ __('Email Contact') }}</th>
                                        <th>{{ __('Date') }}</th>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#modal-message" data-id="1" class="go-back modal-link">teste</a>
                                        </td>
                                        <td>José Nogueira</td>
                                        <td>27-01-2018</td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#modal-message" data-id="1" class="go-back modal-link">teste</a>
                                        </td>
                                        <td>José Nogueira</td>
                                        <td>27-01-2018</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /messages ends -->
                        <!-- orders -->
                        <div class="col-xs-12 col-sm-6">
                            <h2 class="page-title">{{ __('Orders & Payments') }}</h2>
                            <div class="table-items">
                                <a href="#" class="go-back">
                                    <strong>
                                        <i class="fas fa-shopping-cart"></i>
                                        1 Order</strong> Pending</a>
                                <hr>
                                <a href="#" class="go-back">
                                    <strong>
                                        <i class="far fa-credit-card"></i> 1 Payment</strong> Pending</a>
                                <hr>
                                <a href="#" class="go-back">
                                    <strong>
                                        <i class="fas fa-truck"></i> 1 Delivery</strong> Pending
                                </a>
                            </div>
                        </div>
                        <!-- /orders ends -->
                    </div>
                    <!-- messages and orders ends -->
                    <!-- mailing list -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-title">
                                {{ __('Mailing list')}}
                                <small class="caps">[{{ __('Total')}}:
                                    <strong>2</strong>]</small>
                            </h2>
                            <p>Sua lista de emails permite que você entre em contato com clientes ou visitantes interessados
                                no seu site. Chegar a eles com ofertas exclusivas ou atualizações sobre seus produtos.</p>
                            <br>
                            <div class="table-items">
                                <form method="post" action="" class="search search--users active">
                                    <input type="text" name="search" placeholder="{{ __('Search') }}..." class="form-control search__input">
                                    <button type="submit" class="search__btn">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <br>
                                <br>
                                <table class="table-items__table">
                                    <tr>
                                        <th>
                                            Subscriber Email
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <p>
                                                josenogueira@loba.pt
                                            </p>
                                        </td>
                                        <td>
                                            27-01-2018
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- mailing list ends -->
                    <!-- dashboard ends -->
                </div>
                <div class="col-lg-2">
                    <div class="right-asidebar">
                        <section>
                            <h2 class="sub-title">
                                Your Last Activity
                            </h2>
                            <div class="activity">
                                <label>
                                    Autor
                                </label>
                                <p>
                                    enabled Stripe as a payment provider
                                </p>
                                <small>20:53 19/01/2017</small>
                            </div>
                            <div class="activity">
                                <label>
                                    Autor
                                </label>
                                <p>
                                    enabled Stripe as a payment provider
                                </p>
                                <small>20:53 19/01/2017</small>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
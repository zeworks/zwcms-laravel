@extends('layouts.app') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Notificações') }}</h2>
                <!-- page title ends -->
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('notification_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Notificação') }}
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-5">
                        <h4 class="strong">Costumers notifications</h4>
                        <small>These notifications are automatically sent out to the customer. Click on the notification template
                            to edit the content.</small>
                    </div>
                    <div class="col-lg-7">
                        <div class="table-items">
                            <!-- costumers -->
                            <div class="form-field">
                                <p>
                                    <strong>Costumer</strong>
                                </p>
                                <br>
                                <table class="table-items__table">
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Costumer account welcome">Costumer account welcome</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer when they complete their account activation.</small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Costumer account password reset">Costumer account password reset</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer when they ask to reset their accounts password.
                                            </small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Contact Customer">Contact Customer</a>
                                        </td>
                                        <td>
                                            <small>Sent to the customer when you contact them from the orders or customers page.
                                                You can edit this email before you send it.</small>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- end costumers -->
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-5">
                        <h4 class="strong">Orders notifications</h4>
                        <small>These notifications are automatically sent out to the customer. Click on the notification template
                            to edit the content.</small>
                    </div>
                    <div class="col-lg-7">
                        <div class="table-items">
                            <!-- orders -->

                            <div class="form-field">
                                <p>
                                    <strong>Orders</strong>
                                </p>
                                <br>
                                <table class="table-items__table">
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="order confirmation">Order Confirmation</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer after they place their order.</small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Order Canceled">Order Canceled</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer if their order is canceled.</small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Order refund">Order Refund</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer if their order is refunded.</small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Abandoned checkout">Abandoned Checkout</a>
                                        </td>
                                        <td>
                                            <small>Sent to the customer if they leave checkout before they buy the items in their
                                                cart. Configure options in "
                                                <a href="{{ route('notification_edit') }}" title="checkout settings">checkout settings</a>".</small>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- end orders -->
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-5">
                        <h4 class="strong">Shipping notifications</h4>
                        <small>These notifications are automatically sent out to the customer. Click on the notification template
                            to edit the content.</small>
                    </div>
                    <div class="col-lg-7">
                        <div class="table-items">
                            <!-- shipping -->

                            <div class="form-field">
                                <p>
                                    <strong>Shipping</strong>
                                </p>
                                <br>
                                <table class="table-items__table">
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Shipping confirmation">Shipping Confirmation</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer when their order is fulfilled.</small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Shipping Update">Shipping Update</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer if their fulfilled order’s tracking number
                                                is updated.</small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Shipment out for delivery">Shipment out for delivery</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer after the status of their fulfillment changes
                                                to out for delivery</small>
                                        </td>
                                    </tr>
                                    <tr class="item-table">
                                        <td>
                                            <a href="{{ route('notification_edit') }}" title="Shipment delivered">Shipment Delivered</a>
                                        </td>
                                        <td>
                                            <small>Sent automatically to the customer after the status of their fulfillment changes
                                                to delivered</small>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- end shipping -->
                        </div>
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    </div>
</div>
@endsection
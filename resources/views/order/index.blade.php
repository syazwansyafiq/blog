@extends('shared.layouts.app')

@section('content')
<section id='order_form' class="container">
    <div class="row">
        <h1 class="section_head">
            Order Details
        </h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-push-8">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="ico-cart mr5"></i>
                        Order Summary
                    </h3>
                </div>
                <div class="panel-body pt0">
                    <table class="table mb0 table-condensed">
                        <tr>
                            <td class="pl0">Free Ticket X <b>2</b></td>
                            <td style="text-align: right;">
                                FREE
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="help-block">
                Please note you only have <span id='countdown'></span> to complete this transaction before your tickets are re-released.
            </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
            <div class="event_order_form">
                <form method="POST" action="/checkout/create">
                {{ csrf_field() }}
                <!-- <input name="event_id" type="hidden"> -->
                <h3>Your Information</h3>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="order_first_name">First Name</label>
                            <input required="required" class="form-control" name="order_first_name" type="text" id="order_first_name">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="order_last_name">Last Name</label>
                            <input required="required" class="form-control" name="order_last_name" type="text" id="order_last_name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="order_email">Email</label>
                            <input required="required" class="form-control" name="order_email" type="text" id="order_email">
                        </div>
                    </div>
                </div>
                <div class="p20 pl0">
                    <a href="javascript:void(0);" class="btn btn-primary btn-xs" id="mirror_buyer_info">
                        Copy buyer details to all ticket holders
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ticket_holders_details" >
                            <h3>Ticket Holder Information</h3>
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <b>Free Ticket</b>: Ticket Holder 1 Details
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ticket_holder_first_name[0][909]">First Name</label>
                                            <input required="required" class="ticket_holder_first_name.0.909 ticket_holder_first_name form-control" name="ticket_holder_first_name[0][909]" type="text" id="ticket_holder_first_name[0][909]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ticket_holder_last_name[0][909]">Last Name</label>
                                            <input required="required" class="ticket_holder_last_name.0.909 ticket_holder_last_name form-control" name="ticket_holder_last_name[0][909]" type="text" id="ticket_holder_last_name[0][909]">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ticket_holder_email[0][909]">Email Address</label>
                                            <input required="required" class="ticket_holder_email.0.909 ticket_holder_email form-control" name="ticket_holder_email[0][909]" type="text" id="ticket_holder_email[0][909]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <b>Free Ticket</b>: Ticket Holder 2 Details
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ticket_holder_first_name[1][909]">First Name</label>
                                            <input required="required" class="ticket_holder_first_name.1.909 ticket_holder_first_name form-control" name="ticket_holder_first_name[1][909]" type="text" id="ticket_holder_first_name[1][909]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ticket_holder_last_name[1][909]">Last Name</label>
                                            <input required="required" class="ticket_holder_last_name.1.909 ticket_holder_last_name form-control" name="ticket_holder_last_name[1][909]" type="text" id="ticket_holder_last_name[1][909]">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ticket_holder_email[1][909]">Email Address</label>
                                            <input required="required" class="ticket_holder_email.1.909 ticket_holder_email form-control" name="ticket_holder_email[1][909]" type="text" id="ticket_holder_email[1][909]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .offline_payment_toggle {
                        padding: 20px 0;
                    }
                </style>
                <input name="is_embedded" type="hidden" value="">
                <input class="btn btn-lg btn-success card-submit" style="width:100%;" type="submit" value="Checkout">
            </div>
        </div>
    </div>
</section>
<script src="http://attendize.website/assets/javascript/frontend.js"></script>
<script>if($('#countdown')) {setCountdown($('#countdown'), 600);}</script>
<script>var OrderExpires = 1499996883;</script>

@endsection



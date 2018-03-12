
@extends('shared.layouts.app')  

@section('content')
    
    <section id="order_form" class="container">
        <div class="row">
            <div class="col-md-12 order_header">
                <span class="massive-icon">
                    <i class="ico ico-checkmark-circle"></i>
                </span>
                <h1>Thank you for your order!</h1>
                <h2>
                    Your <a href="http://localhost:8000/order">tickets</a> and a confirmation email have been sent to you.
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="content event_view_order">
                    <div class="order_details well">
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <b>First Name</b><br> s
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <b>Last Name</b><br> s
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <b>Amount</b><br> &euro;0.00
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <b>Reference</b><br> HJCGP147
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <b>Date</b><br> 2017-07-14 01:40:03
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <b>Email</b><br> s@a.com
                            </div>
                        </div>
                    </div>


                        
                    <h3>
                        Order Items
                    </h3>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        Ticket
                                    </th>
                                    <th>
                                        Quantity
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Booking Fee
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Free Ticket
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        FREE
                                    </td>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                        FREE
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <b>Sub Total</b>
                                    </td>
                                    <td colspan="2">
                                        &euro;0.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3>
                        Order Attendees
                    </h3>

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <tr>
                                    <td>
                                        s
                                        s
                                        (<a href="mailto:s@a.com">s@a.com</a>)
                                    </td>
                                    <td>
                                        Free Ticket
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        s
                                        s
                                        (<a href="mailto:s@a.com">s@a.com</a>)
                                    </td>
                                    <td>
                                        Free Ticket
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    

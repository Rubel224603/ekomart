@extends('website.backend.master')
@section('content')
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>

<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="4">
                <table>
                    <tr>
                        <td class="title">
                            <img
                                src="{{asset('/')}}website/assets/images/logo/logo-01.svg" alt="logo-main"
                                style="width: 100%; max-width: 300px"
                            />
                        </td>

                        <td colspan="">
                            Invoice #: {{$order->id}}<br />
                            Order Date: {{$order->order_date}}<br />
                            Delivery Date: {{$order->delivery_date}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="4">
                <table>
                    <tr>

                          <td >
                             <h2>  Customer Info</h2>
                            <hr>
                            {{$order->customer->full_name}}<br />
                            {{$order->customer->phone}} <br/>
                            {{$order->customer->address}}
                        </td>

                        <td colspan="">

                          <h2> Company Info</h2>
                            <hr>
                            ABC limited<br />
                            abcoffice@gmail.com <br>
                            Dhaka, Bangladesh
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td colspan="3">Payment Method</td>

            <td>{{$order->payment_method}}</td>
        </tr>

        <tr class="details">
            <td colspan="3">{{$order->payment_method}}</td>

            <td>1000</td>
        </tr>

        <tr class="heading">
            <td align="left">Item info</td>
            <td align="center">Item Qty</td>
            <td align="center">Item Price</td>
            <td align="right">Total Price</td>


        </tr>
        @php
            $total=0;
        @endphp
        @foreach($order->orderProducts as $orderProduct)
        <tr class="item">
            <td align="left">{{$orderProduct->product_name}}</td>
            <td align="center">{{$orderProduct->product_price}}</td>
            <td align="center">{{$orderProduct->product_qty}}</td>
            <td align="right">{{$orderProduct->product_price*$orderProduct->product_qty}}</td>
        </tr>
            @php
                $prodctTotal= $orderProduct->product_price*$orderProduct->product_qty;
                $total +=$prodctTotal;
            @endphp
        @endforeach

        <tr class="item">

            <td colspan="3"></td>
            <td  align="right"><b>Item Total: {{$total}}</b></td>
        </tr>

        <tr class="item last">


            <td colspan="3"></td>
            <td><b>Shipping cost: {{$order->shipping_total}}</b></td>
        </tr>

        <tr class="total">
            <td colspan="3"></td>

            <td>Total Payable: {{$order->shipping_total +$total}}</td>
        </tr>
    </table>
</div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Ana Sayfa</a></li>
                    <li class="active">Sepetim</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--start-ckeckout-->
    <div class="ckeckout">
        <div class="container">
            <div class="ckeck-top heading">
                <h2>Sepetim</h2>
            </div>
            <div class="ckeckout-top">
                <div class="cart-items">
                    <h3>My Shopping Bag (3)</h3>

                    <div class="in-check">
                        <ul class="unit">
                            <li><span>Item</span></li>
                            <li><span>Product Name</span></li>
                            <li><span>Unit Price</span></li>
                            <li><span>Delivery Details</span></li>
                            <li></li>
                            <div class="clearfix"></div>

                        </ul>

                    @foreach([\App\Helper\sepetHelper::allList()] as $key => $value)
                            <ul class="cart-header">
                                <div class="close1"></div>
                                <li class="ring-in">
                                    <img src="" alt="" />
                                </li>
                                <li><span class="name">{{dd($value('name'))}}</span></li>
                                <li><span class="cost">$ 290.00</span></li>
                                <li><span>Free</span>
                                    <p>Delivered in 2-3 business days</p></li>
                                <div class="clearfix"></div>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <a></a>

            </div>
        </div>
    </div>
    <!--end-ckeckout-->
    <!--information-starts-->
@endsection

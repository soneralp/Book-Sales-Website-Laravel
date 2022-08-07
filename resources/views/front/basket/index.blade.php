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
       {{--     <div class="ckeck-top heading">
                <h2>Sepetim</h2>
            </div>--}}
            <div class="ckeckout-top">
                <div class="cart-items">
                    <h3>Alışveriş Sepetim</h3>

                    <div class="in-check">
                        <ul class="unit">
                            <li><span>Resim</span></li>
                            <li><span>Kitap Adı</span></li>
                            <li><span>Kitap Fiyatı</span></li>
                            <li><span>Sepetteki Kitap Sayısı: {{App\Helper\sepetHelper::countData()}}</span></li>
                            <li></li>
                            <div class="clearfix"></div>

                        </ul>

                    @foreach(\App\Helper\sepetHelper::allList() as $key => $value)
                            <ul class="cart-header">
                                    <a href="{{route('basket.remove',['id'=>$key])}}">
                                        <div class="close1">
                                        </div>
                                    </a>
                                <li class="ring-in">
                                    <img style="width: 150px; height: 150px;" src="{{$value['image']}}" alt="" />
                                </li>
                                <li><span class="name">{{($value['name'])}}</span></li>
                                <li><span class="cost">{{($value['fiyat'])}} TL</span></li>

                                <div class="clearfix"></div>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <a href="{{route('basket.complete')}}">
                    <button class="btn btn-success">Alışverişi Tamamla</button>
                </a>
            </div>
        </div>
    </div>
    <!--end-ckeckout-->
    <!--information-starts-->
@endsection

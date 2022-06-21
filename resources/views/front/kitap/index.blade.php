@extends('layouts.app')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Ana Sayfa</a></li>
                    <li class="active">{{$data[0]['name']}}</li>
                </ol>
            </div>
        </div>
    </div>

    @if(session("status"))
        <div class="breadcrumbs">
            <div class="container" style="margin-top: 20px;">
                <div class="breadcrumbs-main" style="background-color: #28a745; color: white;">
                    <ol class="breadcrumb">
                        {{session("status")}}
                    </ol>
                </div>
            </div>
@endif


    <!--end-breadcrumbs-->
    <!--start-single-->
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-12 ">
                    <div class="sngl-top">
                        <div class="col-md-4 col-sm-12  single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}">
                                        <div class="thumb-image"> <img src="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- FlexSlider -->
                            <script src="{{asset('js/imagezoom.js')}}"></script>
                            <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
                            <link rel="stylesheet" href="{{'css/flexslider.css'}}" type="text/css" media="screen" />

                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function() {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-8 single-top-right">
                            <form method="post">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{$data[0]['name']}}</h2>
                                <div class="star-on">
                                    <div class="clearfix"> </div>
                                </div>

                                <h5 class="item_price">Fiyat: {{$data[0]['fiyat']}} TL</h5>
                                <p>{{$data[0]['aciklama']}}</p>
                                <div class="available">

                                </div>
                                <hr>
                                    <ul>
                                        <li class="size-in"><strong>Kategori:</strong> {{\App\Models\Kategoriler::getField($data[0]['kategoriid'],"name")}}</li>
                                        <li class="size-in"><strong>Yayın Evi:</strong> {{\App\Models\YayinEvi::getField($data[0]['yayineviid'],"name")}}</li>
                                        <li class="size-in"><strong>Yazar:</strong> {{\App\Models\Yazarlar::getField($data[0]['yazarid'],"name")}} </li>
                                        <div class="clearfix"> </div>
                                    </ul>
                                <hr>

                                <a href="{{route('basket.add',['id'=>$data[0]['id']])}}" class="add-cart item_add">SEPETE EKLE</a>

                            </div>
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="latestproducts">
                        <div class="product-one">
                            @foreach(\App\Models\Kitaplar::inRandomOrder()->limit(3)->get() as $key => $value)
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{route('kitap.detay',['selflink' => $value['selflink']])}}" class="mask"><img class="img-responsive zoom-img" style="height: 250px; width: 200px;" src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>{{$value['name']}}</h3>
                                        <p>{{\App\Models\Yazarlar::getField($value['yazarid'],"name")}}</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">{{$value['fiyat']}} TL</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-20%</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

@endsection

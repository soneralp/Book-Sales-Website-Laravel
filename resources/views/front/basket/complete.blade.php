
@extends('layouts.app')
@section('content')
<body>
<!--top-header-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="{{route('basket.complete')}}">Ana Sayfa</a></li>
                <li class="active">Alışverişi Tamamla</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--contact-start-->
<div class="contact">
    <div class="container">
        <div class="contact-top heading">
            <h2>Alışverişi Tamamla</h2>
        </div>
        @if(session("status"))
            {{session("status")}}
        @endif



        <div class="contact-text">
            <div class="col-md-12 contact-right">
                <form action="{{route('basket.completeStore')}}">
                    <input name="adres" required type="text" placeholder="Adres">
                    @error('adres')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    <input name="telefon" required type="text" placeholder="Telefon">
                    @error('telefon')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                    <textarea name="mesaj" placeholder="Message" required=""></textarea>
                    <div class="submit-btn">
                        <input type="submit" value="Alışverişi Tamamla">
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

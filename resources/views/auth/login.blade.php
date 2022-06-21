@extends('layouts.app')

@section('content')




    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Giriş Yap</a></li>
                    <li class="active"></li>
                </ol>
            </div>
        </div>
    </div>




    <div class="account">
        <div class="container">
            <div class="account-top heading">
                <h2>Giriş Yap</h2>
            </div>
            <div class="account-main">
                <div class="col-md-6 account-left">
                    <h3>Mevcut Kullanıcı</h3>
                    <div class="account-bottom">
                        <form method="POST" action="{{ route('login') }}">

                            @csrf

                            <div>
                                <input name="email" value="{{ old('email') }}" placeholder="Email" type="text" tabindex="3" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>


                            <div>
                                  <input placeholder="Password" name="password" type="password" tabindex="4" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>



                        <div class="address">
                                <a class="forgot" href="#">Forgot Your Password?</a>
                            <input type="submit" value="Login">
                        </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-6 account-right account-left">
                    <h3>Yeni Kullanıcı Mısın?</h3>
                    <p>Alt kısımda bulunan Hesap Oluştur butonuna tıklayarak ücretsiz bir şekidlde kayıt olabilir ve indirimlerden yararlanmaya başlayabilirsiniz... </p>
                    <a href="{{route('register')}}">Hesap Oluştur</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>












@endsection

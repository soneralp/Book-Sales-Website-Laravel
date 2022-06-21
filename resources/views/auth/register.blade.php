@extends('layouts.app')

@section('content')




    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{route('index')}}">Ana Sayfa</a></li>
                    <li class="active">Kayıt Ol</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--register-starts-->



    <div class="register">
        <div class="container">
            <div class="register-top heading">
                <h2>Kayıt Ol</h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="register-main">
                <div class="col-md-6 account-left">
                    <input style="border-radius: 0;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Adınız" type="text" tabindex="1" required>
                        @error('name')
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    <input style="border-radius: 0;" class="form-control @error('mail') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Adresinizi Giriniz " type="text" tabindex="3" required>
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                </div>
                <div class="col-md-6 account-left">
                    <input style="border-radius: 0;" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Şifreniz" name="password"  autocomplete="new-password"  type="password" tabindex="4" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <input id="password-confirm" placeholder="Şifreniz Tekrar" type="password"  name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="address submit">
                <input type="submit" value="Submit">
            </div>
            </form>
        </div>
    </div>











@endsection

@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session("status"))
                        <div class="alert alert-success" role="alert">
                            {{session("status")}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yazar Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route('admin.yazar.edit.post',['id'=>$data[0]['id']])}}" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input value="{{$data[0]['name']}}" type="text" name="name" class="form-control" placeholder="Yazar Adı">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            @if($data[0]['image']!="")
                                                <img style="width: 250px;height: 250px; padding-bottom: 10px;" src="{{asset($data[0]['image'])}}" alt="">
                                            @endif
                                            <input style="opacity: 1; position: inherit;" type="file" name="image">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                                <textarea   name="bio" id="" cols="30" rows="10"
                                                          class="form-control" placeholder="Yazar Bio">{{$data[0]['bio']}}</textarea>
                                            <span  class="material-input"></span>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Yazar Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

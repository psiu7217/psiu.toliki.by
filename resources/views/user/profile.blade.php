@extends('layouts.app')

@section('content')
    <div id="profile_info">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="header-title">Hellow {{$user_info->name}}</h1>
                </div>
            </div>
            <div class="info_block">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="coins">
                            <p>Балласн равен: <strong> {{$user_info->coins}} </strong></p>
                            <button id="give_me_coin" class="btn btn-success">Получить еще</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="header-title">Пари</h1>
        </div>
        <div class="col-sm-4 text-right">
            <a class="btn btn-success" href="{{route('bets.add')}}">Добавить пари</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

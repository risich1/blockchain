@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar card">
                    <a href="/home">Текущие сделки</a>
                    <a href="/close_deals" class="active">Завершенные сделки</a>
{{--                    <a href="/disputes">Споры</a>--}}
                </div>
            </div>
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Договор на разработку сайта</h5>
                                <a href="#" class="btn btn-primary">Перейти к сделке</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Договор на разработку сайта</h5>
                                <a href="#" class="btn btn-primary">Перейти к сделке</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Договор на разработку сайта</h5>
                                <a href="#" class="btn btn-primary">Перейти к сделке</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Договор на разработку сайта</h5>
                                <a href="#" class="btn btn-primary">Перейти к сделке</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <button class="create" data-toggle="modal" data-target="#create">
        <i class="fas fa-plus"></i>
    </button>


@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar card">
                    <a href="/deals" class="active">Текущие сделки</a>
                    <a href="/close_deals">Завершенные сделки</a>
                    <a href="/disputes">Споры</a>
                </div>
            </div>
            @yield('adminContent')
        </div>

    </div>


    <button class="create">
        <i class="fas fa-plus"></i>
    </button>


@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">


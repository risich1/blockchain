@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">

        @include('parts.sidebar')

        <div class="col-md-10">
            <div class="row justify-content-center">
                @if(count($deals) > 0)
                    @foreach($deals as $deal)
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $deal->name }}</h5>
                                    <a href="#" class="btn btn-primary">Перейти к сделке</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h5>Актиивных сделок нет</h5>
                @endif
            </div>
        </div>
    </div>

</div>


<button class="create" data-toggle="modal" data-target="#create">
    <i class="fas fa-plus"></i>
</button>

@include('forms.makeDealForm', $users)

@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

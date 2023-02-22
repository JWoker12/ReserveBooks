@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Book Title: {{$data->title}}</h4>
                    <h5 class="card-title">Author: {{$data->author}}</h5>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            Description: {{$data->decription}}
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/user.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('reserve', ['id' => $data->id]) }}">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="text-md-end mx-2">Days</label>
                                <input type="number" name="days" value="1">
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-warning">Reserve</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
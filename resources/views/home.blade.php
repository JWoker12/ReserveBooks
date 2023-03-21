@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            {{-- target User --}}
            <div class="card m-2">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">My Name:</h5>
                                <p class="card-text">{{ Auth::user()->username }}</p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Reserves Total:</h5>
                                <p class="card-text">{{$reservers->count()}}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <img src="/img/user.png" class="rounted" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Table booking --}}
            <div class="card m-2">
                <div class="card-header">Table Booking</div>
                <div class="card-body">
                    <table class="table table-dark table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($reservers->count() != 0)
                                @foreach ($reservers as $books)
                                    <tr>
                                        <td>
                                            {{$books->book->title}}
                                        </td>
                                        <td>
                                            {{$books->book->author}}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">
                                        No Data
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

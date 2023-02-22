@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <select class="form-select w-25">
                        <option selected>Category</option>
                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <option value={{$category->id}}>{{$category->category_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
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
                            @if (count($books) > 0)
                                @foreach ($books as $book)
                                    <tr>
                                        <td>
                                            <a href={{route('show_book',['id' => $book->id])}}>{{$book->title}}</a>
                                        </td>
                                        <td>{{$book->author}}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning">Reserve</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
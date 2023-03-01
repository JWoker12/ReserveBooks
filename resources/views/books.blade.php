@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <select class="form-select w-25">
                        <option selected>All Categories</option>
                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <option value={{$category->id}}>{{$category->category_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-dark text-center">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if (count($books) > 0)
                                @foreach ($books as $book)
                                    <tr>
                                        <td>
                                            <a href={{route('show_book',['id' => $book->id])}}>{{$book->title}}</a>
                                        </td>
                                        <td>{{$book->author}}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Reserve</button>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
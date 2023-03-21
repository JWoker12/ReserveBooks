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
                <table-book :books="{{$books}}" />
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Course Update</h6>
                    <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control text-white"
                                   placeholder="Title" value="{{$course->title}}">
                            <label for="floatingInput">Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="price" class="form-control text-white" id="floatingInput"
                                   placeholder="" value="{{$course->price}}">
                            <label for="floatingInput">Price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="min_members" class="form-control text-white" id="floatingInput"
                                   placeholder="min_members" value="{{$course->min_members}}">
                            <label for="floatingPassword">Min Members</label>
                        </div>
                        <div class="form-floating mb-3">
                           <textarea class="form-control text-white" name="description" placeholder="Leave a comment here"
                                     id="floatingTextarea" style="height: 150px;">{{$course->description}}</textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                        <div class="row">
                            <div class="form-floating mb-3 col-6">
                                <select class="form-select text-white" name="teacher_id" id="floatingSelect"
                                        aria-label="Floating label select example">
                                    <option disabled selected>Open this select menu</option>
                                    @foreach($teachers as $id=>$item)
                                        <option @if($id==$course->teacher_id) selected @endif value="{{$id}}">{{$item}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Teachers</label>
                            </div>
                            <div class="form-floating mb-3 col-6">
                                <select class="form-select text-white" name="category_id" id="floatingSelect"
                                        aria-label="Floating label select example">
                                    <option disabled selected>Open this select menu</option>
                                    @foreach($categories as $id=>$item)
                                        <option  @if($id==$course->category_id) selected @endif value="{{$id}}">{{$item}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Categories</label>
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-6">
                            <label for="formFile" class="form-label">Select a picture</label>
                            <input class="form-control bg-dark" name="image" type="file" id="formFile">
                        </div>
                        <div class="mb-3 col-6">
                            <img width="300px"
                                 src="{{ asset('images/'.$course->image)}}"
                                 alt="Categories">
                        </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd"
                                      d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Update
                        </button>
                        <a class="btn btn-secondary mt-3" href="{{route('courses.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                            Back
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

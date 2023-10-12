@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">

                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Course show </h6>
                    <table class="table table-dark my-0">
                        <tr>
                            <th>Title</th>
                            <td>{{$course->title}}</td>
                        </tr>
                        <tr>
                            <th>Teacher</th>
                            <td>{{$course->teacher->first_name}} {{$course->teacher->last_name}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$course->description}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$course->price}}</td>
                        </tr>
                        <tr>
                            <th>Min Members</th>
                            <td>{{$course->min_members}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{$course->category->title}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img width="550px" height="300px" src="{{asset('images/'.$course->image)}}"
                                     alt="Image"></td>
                        </tr>
                    </table>
                    <a class="btn btn-danger mt-3" href="{{route('courses.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                        </svg>
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

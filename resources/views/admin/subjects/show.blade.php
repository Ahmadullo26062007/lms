@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">

                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">User show </h6>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email(Nullable)</th>
                            <th scope="col">Roles</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @foreach($user->roles as $item)
                                        <span class="badge bg-primary">{{$item->title}}</span>
                                    @endforeach
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <a class="btn btn-danger mt-3" href="{{route('users.index')}}">
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

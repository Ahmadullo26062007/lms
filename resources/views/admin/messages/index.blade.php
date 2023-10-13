@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <a class="btn btn-primary mb-3" href="{{route('messages.create')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd"
                              d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Create New
                </a>
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Messages Table</h6>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Text</th>
                            <th scope="col">Suply Text</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <th scope="row">{{$message->id}}</th>
                                @php
                                    $user=\App\Models\User::find($message->user_id)
                                @endphp
                                <td>{{$user->name}}</td>
                                <td>@if($message->text){{substr($message->text,0,20)}}...@else <span class="bg bg-danger">There is no answer</span> @endif</td>
                                @livewire('message-livewire',['message'=>$message])
                                <td>

                                    <a href="{{route('messages.show',$message->id)}}" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                    </a>
                                    <form class="d-inline" action="{{route('messages.destroy',$message->id)}}"
                                          method="post" onsubmit="return confirm('{{ trans('Are you sure?') }}');">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip"
                                                title='Delete' type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

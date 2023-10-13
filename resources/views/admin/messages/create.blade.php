@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Course Add</h6>
                    <form action="{{route('messages.store')}}" method="post" enctype="multipart/form-data">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        @csrf
                            <div class="form-floating mb-3">
                                <select class="form-select text-white" name="user_id" id="floatingSelect"
                                        aria-label="Floating label select example">
                                    <option disabled selected>Open this select menu</option>
                                    @foreach($user as $id=>$item)
                                        <option value="{{$id}}">{{$item}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Users</label>
                            </div>
                        <div class="form-floating mb-3">
                           <textarea class="form-control text-white" name="suply_text" placeholder="Leave a comment here"
                                     id="floatingTextarea" style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Write a message</label>
                        </div>


                        <button class="btn btn-primary mt-3" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd"
                                      d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Create
                        </button>
                        <a class="btn btn-secondary mt-3" href="{{route('messages.index')}}">
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

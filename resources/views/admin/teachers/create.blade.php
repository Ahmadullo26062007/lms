@extends('layout.admin')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">User Add</h6>
                    @livewire('teacher.create',['subjects'=>\App\Models\Subject::all()])

                </div>
            </div>
        </div>
    </div>
@endsection

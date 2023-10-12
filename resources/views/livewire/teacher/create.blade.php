<form method="post">
    {{--                        @if ($errors->any())--}}
    {{--                            @foreach ($errors->all() as $error)--}}
    {{--                                <div class="alert alert-danger" role="alert">--}}
    {{--                                    {{$error}}--}}
    {{--                                </div>--}}
    {{--                            @endforeach--}}
    {{--                        @endif--}}
    @csrf

    <div class="form-floating mb-3">
        <input type="text" name="firstname" wire:model="firstname" class="form-control text-white" id="floatingInput"
               placeholder="">
        <label for="floatingInput">Firstname</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="lastname" wire:model="lastname" class="form-control text-white" id="floatingInput"
               placeholder="">
        <label for="floatingInput">Lastname</label>
    </div>

    <div class="form-floating mb-3">
        <select  style="background-color: #000" name="subject_id" wire:model="subject_id" class="form-control text-white" id="floatingInput">
            @foreach($subjects as $s)
                <option value="{{$s->id}}">{{$s->title}}</option>
            @endforeach
        </select>
        <label for="floatingInput">subject</label>
    </div>
    <div class="form-floating mb-3">
        <select style="background-color: #000" type="text"  wire:model="gender" class="form-control text-white" id="floatingInput">
            <option value="0">ayol</option>
            <option value="1">erkak</option>
        </select>
        <label for="floatingInput">gender</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" name="phonenumber" wire:model="phonenumber" class="form-control text-white" id="floatingInput"
               placeholder="">
        <label for="floatingInput">phone number</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="password"  wire:model="password" class="form-control text-white" id="floatingInput"
               placeholder="">
        <label for="floatingInput">password</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="email" wire:model="email"  class="form-control text-white" id="floatingInput"
               placeholder="name@example.com">
        <label for="floatingInput">Email address(Nullable)</label>
    </div>
    <div class="form-floating mb-3 w-50">
        <select style="background-color: #000" type="text" wire:change="updateType()"  wire:model="type" class="form-control text-white" id="floatingInput">
            <option value="0">foiz</option>
            <option value="1">oylik</option>
        </select>
        <label for="floatingInput">kelishuv</label>
    </div>
    @if($persent_type)
        <div class="form-floating mb-3 w-50">
            <input type="number" name="persent" wire:model="persent" class="form-control text-white" id="floatingInput"
                   placeholder="">
            <label for="floatingInput">beriluvchi foiz</label>
        </div>
    @endif

    @if($month_type)
        <div class="form-floating mb-3 w-50">
            <input type="number" name="price" wire:model="price" class="form-control text-white" id="floatingInput"
                   placeholder="">
            <label for="floatingInput">oylik miqdori</label>
        </div>
    @endif
    <button class="btn btn-primary mt-3" type="button" wire:click="create">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd"
                  d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg>
        Create
    </button>
    <a class="btn btn-secondary mt-3" href="{{route('teachers.index')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                  d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        Back
    </a>
</form>

@extends('main')
@section('content')


<div class="row">
    <div class="col-md-6 col-sm-12 m-auto">
        @if(session('success'))
        <div class="alert alert-success dark alert-dismissible fade show" role="alert"><strong>Berhasil!
          </strong> {{ session('success') }}
          <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Name</span>
            <input name="name" type="text" class="form-control" placeholder="...." aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Status</label>
            <select class="form-select" id="inputGroupSelect01" name="status">
                <option selected>Choose...</option>
                <option value="1">Attend</option>
                <option value="2">Cannot Attend</option>
                <option value="3">Still Thinking About It</option>
            </select>
            </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Message</span>
            <textarea name="message" class="form-control" aria-label="" aria-describedby="basic-addon1" row="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
        </form>

    </div>
</div>

@endsection
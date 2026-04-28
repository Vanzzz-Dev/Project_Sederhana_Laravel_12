@extends('master')
@section('content')
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tugas</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
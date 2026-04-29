@extends('master')
@section('content')
    <div class="container">
        <form action="/buattugas" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="exampleFormControlTextarea1" class="form-label">Tugas</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <select name="status" class="form-select mb-4" aria-label="Default select example">
                <option selected>Status</option>
                <option value="progres">Progres</option>
                <option value="selesai">Selesai</option>
                <option value="tertunda">Tertunda</option>
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
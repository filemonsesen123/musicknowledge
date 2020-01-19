@extends('layouts.template')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('submateri.update', $submateri->id_sub_materi) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="submateri">Judul Sub Materi:</label>
          <input type="text" class="form-control" name="submateri" value={{ $submateri->judul_sub_materi }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
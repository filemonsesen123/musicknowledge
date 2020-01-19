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
      <form method="post" action="{{ route('isimateri.update', $isimateri->id_isi) }}">
        @method('PATCH')
        @csrf
          <div class="form-group">
              <label for="header1">Header 1</label>
              <input type="text" class="form-control" name="header1" value={{ $isimateri->header1 }} />
          </div>
          <div class="form-group">
              <label for="image1">Link Image Google Drive 1</label>
              <input type="text" class="form-control" name="image1" value={{ $isimateri->image1 }} />
          </div>
          <div class="form-group">
              <label for="paragraf1">Paragraf 1</label>
              <textarea type="text" class="form-control" name="paragraf1">{{ $isimateri->paragraf1 }} </textarea>
          </div>
          <div class="form-group">
              <label for="header2">Header 2</label>
              <input type="text" class="form-control" name="header2" value={{ $isimateri->header2 }} />
          </div>
          <div class="form-group">
              <label for="image2">Link Image Google Drive 2</label>
              <input type="text" class="form-control" name="image2" value={{ $isimateri->image2 }} />
          </div>
          <div class="form-group">
              <label for="paragraf2">Paragraf 2</label>
              <textarea type="text" class="form-control" name="paragraf2">{{ $isimateri->paragraf2 }}</textarea>
          </div>
          <div class="form-group">
              @csrf
              <label for="header3">Header 3</label>
              <input type="text" class="form-control" name="header3" value={{ $isimateri->header3 }} />
          </div>
          <div class="form-group">
              <label for="image3">Link Image Google Drive 3</label>
              <input type="text" class="form-control" name="image3" value={{ $isimateri->image3 }} />
          </div>
          <div class="form-group">
              <label for="paragraf3">Paragraf 3</label>
              <textarea type="text" class="form-control" name="paragraf3">{{ $isimateri->paragraf3 }}</textarea>
          </div>
          <div class="form-group">
              <label for="header4">Header 4</label>
              <input type="text" class="form-control" name="header4" value={{ $isimateri->header4 }} />
          </div>
          <div class="form-group">
              <label for="image4">Link Image Google Drive 4</label>
              <input type="text" class="form-control" name="image4" value={{ $isimateri->image4 }} />
          </div>
          <div class="form-group">
              <label for="paragraf4">Paragraf 4</label>
              <textarea type="text" class="form-control" name="paragraf4">{{ $isimateri->paragraf4 }}</textarea>
          </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<h4>Artikel Baru</h4>
<form action="{{ route('hp.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="produk" class="control-label">produk</label>
        <input type="text" class="form-control" name="produk" placeholder="produk">
        @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('produk') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Content</label>
        <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('hp.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
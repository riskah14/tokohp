@extends('layouts.app')

@section('content')
<h4>{{ $hp->produk }}</h4>
<p>{{ $hp->content }}</p>
<a href="{{ route('hp.index') }}" class="btn btn-default">Kembali</a>
@endsection
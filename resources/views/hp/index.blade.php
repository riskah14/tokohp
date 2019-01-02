@extends('layouts.app')

@section('content')
    <a href="{{ route('hp.create') }}" class="btn btn-info btn-sm">Artikel Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Product</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($hps as $hp)
                <tr>
                    <td>{{ $hp->id }}</td>
                    <td><a href="{{ route('hp.show', $hp->id) }}">{{ $hp->produk }}</a></td>
                    <td>
                        <form action="{{ route('hp.destroy', $hp->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('hp.edit', $hp->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
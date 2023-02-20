@extends('layout.layout')

@section('content')
{{-- pagination from data $data --}}
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->kode }}</td>
      <td>{{ $item->nomor_penjualan }}</td>
      <td>{{ $item->kode_barang }}</td>

    </tr>
    @endforeach
  </tbody>
</table>
{{ $data->links() }}
@endsection

@extends('layouts.base')

@section('content')
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
    <div class="mdc-card p-0">
      <h6 class="card-title card-padding pb-0">Striped Table</h6>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Stok Barang</th>
                <th>Harga Barang</th>
                <th>Tahun</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
                @foreach ($product as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->tahun }}</td>
                        <td>
                          <a href="/products/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                          <form action="{{ route('product.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
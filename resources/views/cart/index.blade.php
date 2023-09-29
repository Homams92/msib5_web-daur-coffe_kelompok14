@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Keranjang Belanja</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item->menu->nama }}</td>
                        <td>Rp {{ number_format($item->menu->harga, 2) }}</td>
                        <td>
                            <form action="/cart/update/{{ $item->id }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $item->quantity }}">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </td>
                        <td>Rp {{ number_format($item->menu->harga * $item->quantity, 2) }}</td>
                        <td>
                            <form action="/cart/remove/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="/checkout" class="btn btn-success">Pesan Sekarang</a>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Menu</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->nama }}</td>
                        <td>{{ $menu->deskripsi }}</td>
                        <td>Rp {{ number_format($menu->harga, 2) }}</td>
                        <td>{{ $menu->stok }}</td>
                        <td>
                            <!-- Tambahkan tombol atau tautan untuk menambahkan menu ke keranjang -->
                            <button class="btn btn-primary" onclick="addToCart({{ $menu->id }})">Tambahkan ke Keranjang</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- JavaScript untuk menambahkan menu ke keranjang -->
    <script>
        function addToCart(menuId) {
            // Lakukan logika untuk menambahkan menu ke keranjang belanja (gunakan JavaScript/AJAX)
            // Anda perlu mengirimkan permintaan ke server untuk menambahkan menu ke keranjang belanja.
            // Kemudian, perbarui tampilan keranjang belanja di sini.
        }
    </script>
@endsection

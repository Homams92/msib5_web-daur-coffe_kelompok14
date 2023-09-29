<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::create([
            'nama' => 'Kopi Hitam',
            'deskripsi' => 'Segelas kopi hitam yang nikmat.',
            'harga' => 10.00,
            'stok' => 100,
        ]);

        Menu::create([
            'nama' => 'Cappuccino',
            'deskripsi' => 'Espresso dengan lapisan susu dan busa.',
            'harga' => 15.00,
            'stok' => 50,
        ]);

        // Tambahkan data menu lainnya sesuai kebutuhan.
    }
}

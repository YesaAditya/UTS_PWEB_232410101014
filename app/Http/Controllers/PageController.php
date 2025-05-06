<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLoginForm(){
        return view('login', [

        ]);
    }

    private static $users = [
        ['username' => 'admin', 'password' => 'admin123'],
        ['username' => 'user1', 'password' => 'user1123'],
    ];

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        foreach (self::$users as $user) {
            if ($user['username'] === $request->username &&
                $user['password'] === $request->password) {
                session(['username' => $request->username]);
                return redirect()->route('dashboard');
            }
        }

        return back()->withErrors([
            'loginError' => 'Username atau password salah',
        ]);
    }

    public function dashboard()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $username = session('username');
        $data = [['name' => 'iPhone 14 Pro Max', 'price' => 'Rp 18.000.000', 'sold' => 45, 'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-14-pro-model-unselect-gallery-2-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1660753619946'],
        ['name' => 'Samsung S23 Ultra', 'price' => 'Rp 17.000.000', 'sold' => 38, 'image' => 'https://sm.pcmag.com/pcmag_me/photo/default/s23-ultra-18_n5vf.jpg'],
        ['name' => 'Xiaomi 13 Pro', 'price' => 'Rp 14.000.000', 'sold' => 32, 'image' => 'https://i02.appmifile.com/525_operatorx_operatorx_xm/22/02/2023/a83af85dd46f847a59a5ffecd1186d16.jpg?q=100'],
        ['name' => 'OPPO Find N2 Flip', 'price' => 'Rp 12.000.000', 'sold' => 28, 'image' => 'https://www.digitaltrends.com/wp-content/uploads/2022/07/Asus-ROG-Phone-6-Pro-Back-Hand-Buttons.jpg?p=1'],];
        return view('dashboard', compact('username', 'data'));
    }

    public function profile()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $username = session('username');
        return view('profile', compact('username'));


    }

    public function pengelolaan()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $username = session('username');
        $data = [['id' => 1, 'nama' => 'iPhone 14 Pro Max', 'merk' => 'Apple', 'harga' => 18000000, 'stok' => 15, 'gambar' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-14-pro-model-unselect-gallery-2-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1660753619946'],
        ['id' => 2, 'nama' => 'Galaxy S23 Ultra', 'merk' => 'Samsung', 'harga' => 17000000, 'stok' => 8, 'gambar' => 'https://sm.pcmag.com/pcmag_me/photo/default/s23-ultra-18_n5vf.jpg'],
        ['id' => 3, 'nama' => 'Xiaomi 13 Pro', 'merk' => 'Xiaomi', 'harga' => 14000000, 'stok' => 5, 'gambar' => 'https://i02.appmifile.com/525_operatorx_operatorx_xm/22/02/2023/a83af85dd46f847a59a5ffecd1186d16.jpg?q=100'],
        ['id' => 4, 'nama' => 'Oppo Find N2 Flip', 'merk' => 'OPPO', 'harga' => 12000000, 'stok' => 3, 'gambar' => 'https://fdn2.gsmarena.com/vv/pics/oppo/oppo-find-n2-2.jpg'],
        ['id' => 5, 'nama' => 'ROG Phone 6', 'merk' => 'ASUS', 'harga' => 13000000, 'stok' => 10, 'gambar' => 'https://www.digitaltrends.com/wp-content/uploads/2022/07/Asus-ROG-Phone-6-Pro-Back-Hand-Buttons.jpg?p=1'],];

        return view('pengelolaan', compact('username', 'data'));
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }

}

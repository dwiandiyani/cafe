<?php

namespace App\Controllers;


class AuthController extends BaseController
{
    public function login()
    {
        // Tampilkan halaman login
        if ($this->request->getMethod() === 'post') {
            // Logic untuk memproses login
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Proses autentikasi (misalnya memeriksa database)
            // 

            // Jika sukses, set session
            session()->set('isLoggedIn', true);
            session()->set('email', $email);

            return redirect()->to('/'); // Redirect ke halaman beranda setelah login
        }

        return view('auth/login'); // Pastikan nama file view sesuai
    }

    public function register()
    {
        // Tampilkan halaman registrasi
        if ($this->request->getMethod() === 'post') {
            // Logic untuk memproses registrasi
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $confirmPassword = $this->request->getPost('confirm-password');

            // Proses pendaftaran (misalnya menyimpan ke database)
            // ...

            // Redirect atau tampilkan pesan sesuai hasil
            return redirect()->to('/login'); // Redirect ke halaman login setelah registrasi
        }

        return view('auth/register'); // Pastikan nama file view sesuai
    }

    public function logout()
    {
        // Hapus session
        session()->destroy(); // Menghancurkan semua session

        return redirect()->to('/login'); // Redirect ke halaman login setelah logout
    }
}

<?php
class HomeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
        $this->template->tampilan('page/login');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->LoginModel->login($email, $password);
        if($user == TRUE)
        {
            $this->session->set_userdata(['email' => $user['email'], 'nama' => $user['nama'], 'password' => $user['password'], 'foto' => $user['foto']]);
            $this->session->set_flashdata('pesan','Selamat Datang '.$user['nama']);
            $this->template->tampilan('page/halaman');
        }else{
            $this->session->set_flashdata('pesan','Periksa Kembali');
            return redirect('/');
        }
    }

    public function register()
    {
        $this->template->tampilan('page/register');
    }

    public function daftar()
    {
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $foto = fileUpload($_FILES['foto'], "assets/upload/");

        $data = array(
            'email' => $email,
            'nama' => $nama,
            'password' => $password,
            'foto' => $foto,
        );

        $daftar = $this->LoginModel->daftar($data);
        if($daftar == TRUE)
        {
            $this->session->set_flashdata('pesan','Pendaftaran Berhasil Silahkan Login');
            return redirect('/');
        }else{
            $this->session->set_flashdata('pesan','Silahkan Ulangi Pendaftaran');
            return redirect('register');
        }
    }

    public function forgot()
    {
        $this->template->tampilan('page/forgotpwd');
    }

    public function forgotPassword()
    {
        $to   = $_POST['email'];
        $name = $_POST['nama'];
        $subj = 'Verifikasi Password Baru';
        $msg = 'Silahkan Update Password Baru';
        
        $email = kirimEmail($name,"noreply@example.com", $to, $subj, $msg);
        if($email == true)
        {
            $this->session->set_flashdata('pesan','Silahkan Cek Email.');
            return redirect('/');
        }
        else
        {
            $this->session->set_flashdata('pesan','Koneksi Gagal.');
            return redirect('forgotpwd');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(['email','nama','password','foto']);
        $this->session->set_flashdata('pesan','Berhasil Keluar dari Sistem');
        redirect('/');
    }
}
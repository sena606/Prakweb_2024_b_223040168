<<<<<<< HEAD
<?php

class About extends Controller
{
    public function index($nama = 'Sena', $pekerjaan = 'Mahasiswa', $umur = 21)
=======
<?php 

class About extends Controller {
    public function index($nama = 'Sandhika', $pekerjaan = 'Dosen', $umur = 32)
>>>>>>> 5dfa00939d9b7ca734bacc641def24ad523ce811
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
<<<<<<< HEAD
}
=======
}




>>>>>>> 5dfa00939d9b7ca734bacc641def24ad523ce811

<?php

namespace App\Controllers;

use App\Models\JobsModel;

class Jobs extends BaseController
{
    protected $jobsModel;

    public function __construct()
    {
        $this->jobsModel = new JobsModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Pekerjaan',
            // 'jobs' => $this->jobsModel->getJob()
            'jobs' => $this->jobsModel->paginate(9, 'jobs'),
            'pager' => $this->jobsModel->pager,
        ];
        return view('Jobs/Index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Pekerjaan',
            'job' => $this->jobsModel->getJob($slug),
        ];

        if (empty($data['job'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pekerjaan untuk ' . $slug . ' tidak ditemukan');
        }

        return view('Jobs/Detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Pekerjaan',
            'validation' => \Config\Services::validation(),
        ];
        return view('Jobs/Create', $data);
    }

    public function save()
    {
        // Validasi input
        if (!$this->validate([
            'title' => 'required',
            'company_name' => 'required',
            'city' => 'required',
            'deskripsi' => 'required',
            'brand_logo' => [
                'rules' => 'max_size[brand_logo, 1024]|is_image[brand_logo]|mime_in[brand_logo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar(maksimal 1MB)',
                    'is_image' => 'File gambar harus(JPG,JPEG,PNG)',
                    'mime_in' => 'File gambar harus(JPG,JPEG,PNG)',
                ],
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/jobs/create')->withInput()->with('validation', $validation);
            return redirect()->to('/jobs/create')->withInput();
        }
        // Ambil gambar
        $fileImage = $this->request->getFile('brand_logo');
        // apakah tidak ada gambar
        if ($fileImage->getError() == 4) {
            $namaImage = 'Company2.png';
        } else {
            // generate nama sampul random
            $namaImage = $fileImage->getRandomName();
            // pindahkan file
            $fileImage->move('img', $namaImage);
        }

        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->jobsModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'company_name' => $this->request->getVar('company_name'),
            'city' => $this->request->getVar('city'),
            'brand_logo' => $namaImage,
            'deskripsi' => $this->request->getVar('deskripsi'),
        ]);
        return redirect()->to('/jobs');
    }

    //--------------------------------------------------------------------

}

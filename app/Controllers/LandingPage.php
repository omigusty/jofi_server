<?php

namespace App\Controllers;

use App\Models\JobsModel;

class LandingPage extends BaseController
{
    protected $jobsModel;

    public function __construct()
    {
        $this->jobsModel = new JobsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'JOFI | Your Job Finder',
            'jobs' => $this->jobsModel->paginate(6),
            'pager' => $this->jobsModel->pager,
        ];
        return view('LandingPage/Index', $data);
    }

    //--------------------------------------------------------------------

}

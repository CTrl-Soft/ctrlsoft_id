<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
class Download extends Controller
{
    public function index()
    {
        $data['title'] = "CTrl Software - Download Page";
        $data['menu_download'] = true;
        echo view('download_view', $data);
    }
}
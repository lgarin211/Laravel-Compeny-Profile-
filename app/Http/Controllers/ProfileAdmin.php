<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileAdmin extends Controller
{
    //
    public function pas()
    {
        $tabel = $_POST['tabel'];
        unset($_POST['_token'], $_POST['tabel']);
        // dd($_POST);
        if (empty($_POST['created_at'])) {
            unset($_POST['created_at'], $_POST['updated_at']);
        }
        DB::table($tabel)
            ->where('id', $_POST['id'])
            ->update($_POST);
        return redirect('/admin/' . $tabel)->with('cas', 'Data Berhasil Di Update!');
    }
    public function add()
    {
        $tabel = $_POST['tabel'];
        unset($_POST['_token'], $_POST['tabel']);
        // dd($_POST);
        DB::table($tabel)->insert([$_POST]);
        return redirect('/admin/' . $tabel)->with('cas', 'Data Berhasil Di Buat!');
    }
    public function adminSetting()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/setting', \compact('data'));
    }
    public function adminFilemanager()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/Filemanager', \compact('data'));
    }
    public function adminproject()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/project', \compact('data'));
    }
    public function adminDev()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/developer', \compact('data'));
    }
    public function adminCPs()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/CPs', \compact('data'));
    }
    public function index()
    {
        $this->data();
    }
    public function data()
    {
        $data = [];
        $tabel = ['menu', 'developer', 'project', 'setting', 'users', 'cat_project'];
        foreach ($tabel as $key => $value) {
            $das = DB::table($value)
                ->get()->toArray();
            $data[$value] = $das;
        }
        foreach ($data['project'] as $key => $value) {
            $data['project'][$key]->filter = explode(',', $value->filter);
        }
        $pasing = [];
        foreach ($data['setting'] as $key => $value) {
            $pasing[$value->Attribut] = $value->Name;
        }
        if (!empty($pasing['Kelebihan'])) {
            $pasing['Kelebihan'] = explode(',', $pasing['Kelebihan']);
            $data['pasing'] = $pasing;
        }

        return $data;
    }

    public function indfer()
    {
        $data = $this->data();
        // dd($data);

        // \dd($data);
        return view('compeny', \compact('data'));
    }
}

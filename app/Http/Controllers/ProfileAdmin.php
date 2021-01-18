<?php

namespace App\Http\Controllers;

use App\Models\developer;
use App\Models\menu;
use App\Models\project;
use App\Models\setting;
use App\Models\User;
use App\Models\cat_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileAdmin extends Controller
{
    //
    public function pas()
    {
        if (!empty($_GET['tabel'])) {
            $data = $this->data();
            $data[$_GET['tabel']] = DB::table($_GET['tabel'])
                ->where('id', '=', $_GET['id'])
                ->get();
            if ($_GET['tabel'] == 'project') {
                foreach ($data['project'] as $key => $value) {
                    $data['project'][$key]->filter = explode(',', $value->filter);
                }
            }
            // dd($data);
            return view('admin.' . $_GET['view'], \compact('data'));
        }
        if (!empty($_POST)) {
            # code...
            $tabel = $_POST['tabel'];
            unset($_POST['_token'], $_POST['tabel']);
            // dd($_POST);
            DB::table($tabel)
                ->where('id', $_POST['id'])
                ->update($_POST);
            return redirect('/admin/' . $tabel)->with('cas', 'Data Berhasil Di Update!');
        }
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
        return view('admin/settinghome', \compact('data'));
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
    public function dataE()
    {
        $das['developer'] = developer::all();
        $das['menu'] = menu::all();
        $das['project'] = project::all();
        $das['setting'] = setting::all();
        $das['User'] = User::all();
        $das['cat_project'] = cat_project::all();
        return $das;
    }

    public function data()
    {
        $data = [];
        $tabel = ['menu', 'developer', 'project', 'setting', 'users', 'cat_project','views'];
        foreach ($tabel as $key => $value) {
            $das = DB::table($value)
                ->orderBy('id', 'desc')
                ->get()
                ->toArray();
            $data[$value] = $das;
            $data['ORM'] = $this->dataE();
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
        $vas= DB::table('views')
        ->where('active', '=', 1)
        ->first();
        $tempalte=$vas->view.'/compeny';
        // \dd($tempalte);
        return view($tempalte, \compact('data'));
    }
}

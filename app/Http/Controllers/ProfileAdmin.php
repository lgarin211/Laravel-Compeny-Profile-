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
    public function __construct()
    {

        $find = asset('');
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                // \dump($key);
                if ($key == 'ce') {
                    $replace = "/";
                } else {
                    $replace = "";
                }
                // dump($replace);
                $_POST[$key] = str_replace($find, $replace, $value);
            }
            // dd($_POST);
        }
    }
    public function linkn()
    {
        $mas = DB::table($_GET['tabel'])->first();
        $dat = DB::table($_GET['tabel']);
        $tag = '%' . $_GET['key'] . '%';
        foreach ($mas as $key => $value) {
            if ($key == 'id') {
                $dat->where($key, 'like', $tag);
            } else {
                $dat->orwhere($key, 'like', $tag);
            }
        }
        $data[$_GET['tabel']] = $dat->orderBy('id', 'desc')->get();
        // \dd($data);
        return view('adminajax.' . $_GET['tabel'], \compact('data'));
    }
    public function artikels()
    {
        $data = $this->data();
        return view('admin.artikels', \compact('data'));
    }
    public function pas()
    {
        // \dd($_GET);
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
            // dd($data[$_GET['tabel']]);
            return view('admin.' . $_GET['view'], \compact('data'));
        }
        if (!empty($_POST)) {
            # code...
            $tabel = $_POST['tabel'];
            unset($_POST['_token'], $_POST['tabel']);
            // dd($tabel);
            DB::table($tabel)
                ->where('id', $_POST['id'])
                ->update($_POST);
            return redirect('/admin/' . $tabel)->with('cas', 'Data Berhasil Di Update!');
        }
    }
    public function add()
    {
        // dd($_POST);
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


    public function cat_artikels()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/cat_artikels', \compact('data'));
    }
    public function cat_project()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/cat_project', \compact('data'));
    }
    public function menu()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/menu', \compact('data'));
    }

    public function servide()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/servides', \compact('data'));
    }

    public function q_a_s()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/q_a_s', \compact('data'));
    }

    public function cliens()
    {
        $data = $this->data();
        // dd($data);
        return view('admin/cliens', \compact('data'));
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

    public function del()
    {
        DB::table($_GET['tabel'])->where('id', '=', $_GET['id'])->delete();
        return redirect('/admin/' . $_GET['tabel'])->with('cas', 'Data Berhasil Di Hapus!');
    }

    public static function data()
    {
        $data = [];
        $tabel = ['developer', 'menu', 'artikels', 'project', 'setting', 'users', 'cat_project', 'cat_artikels', 'views', 'testimonies', 'cliens', 'q_a_s', 'servides'];
        foreach ($tabel as $key => $value) {
            $das = DB::table($value)
                ->orderBy('id', 'desc')
                ->get()
                ->toArray();
            $data[$value] = $das;
            // $data['ORM'] = $this->dataE();
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
        if (!empty($_GET['json'])) {
            if ($_GET['json'] == 'all') {
                return \json_encode($data);
                die;
            }
        }
        return $data;
    }
    public function allart()
    {
        $data = $this->data();

        $data['menu'] = DB::table('menu')
            ->orderBy('id', 'desc')
            ->where('usef', '=', 'artikel')
            ->get()
            ->toArray();
        $artikels = DB::table('artikels')
            ->orderBy('id', 'desc');
        if (!empty($_GET['o'])) {
            switch ($_GET['o']) {
                case '1':
                    $artikels = $artikels->take(5);
                    break;
                default:
                    $artikels = $artikels
                        ->offset(($_GET['o'] - 1) * 5)
                        ->take(5);
                    break;
            }
        } else {
            $artikels = $artikels->take(5);
        }
        $artikels = $artikels->get();
        $data['sartikels'] = $data['artikels'];
        if (!empty($_GET['w'])) {
            $data['artikels'] = DB::table('artikels')
                ->orderBy('id', 'desc')
                ->where('cat', 'like', $_GET['w'])
                ->get();
        }
        // $artikels->toArray();
        // dd($data);
        return view('artikel.artikelhome', \compact('data'));
    }
    public function onart()
    {
        $data = $this->data();
        $data['menu'] = DB::table('menu')
            ->orderBy('id', 'desc')
            ->where('usef', '=', 'artikel')
            ->get()
            ->toArray();
        $data['item'] = DB::table('artikels')
            ->where('id', '=', $_GET['w'])->first();
            $data['sartikels']=$data['artikels'];
        return view('artikel.onepost', \compact('data'));
    }

    public function Testimony()
    {
        $data = $this->data();
        // \dd($data);
        return view('admin.testimonies', \compact('data'));
    }
    public function indfer2()
    {
        $data = $this->data();
        $vas = DB::table('views')
            ->where('active', '=', 1)
            ->first();
        $tempalte = $vas->view . '/about';
        $data['menu'] = DB::table('menu')
            ->orderBy('id', 'desc')
            ->where('usef', '=', 'base')
            ->get()
            ->toArray();
        // \dd($data);

        return view($tempalte, \compact('data'));
    }
    public function indfer3()
    {
        $data = $this->data();
        $vas = DB::table('views')
            ->where('active', '=', 1)
            ->first();
        $tempalte = $vas->view . '/service';
        $data['menu'] = DB::table('menu')
            ->orderBy('id', 'desc')
            ->where('usef', '=', 'base')
            ->get()
            ->toArray();
        // \dd($data);

        return view($tempalte, \compact('data'));
    }
    public function indfer4()
    {
        $data = $this->data();
        $vas = DB::table('views')
            ->where('active', '=', 1)
            ->first();
        $tempalte = $vas->view . '/portofolio';
        $data['menu'] = DB::table('menu')
            ->orderBy('id', 'desc')
            ->where('usef', '=', 'base')
            ->get()
            ->toArray();
        // \dd($data);

        return view($tempalte, \compact('data'));
    }
    public function indfer()
    {
        $data = $this->data();
        $vas = DB::table('views')
            ->where('active', '=', 1)
            ->first();
        $tempalte = $vas->view . '/compeny';
        $data['menu'] = DB::table('menu')
            ->orderBy('id', 'desc')
            ->where('usef', '=', 'base')
            ->get()
            ->toArray();
        // \dd($data);

        return view($tempalte, \compact('data'));
    }
}

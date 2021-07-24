<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiaModel;
use App\Sia;
use Redirect, Response;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;




class SiaController extends Controller
{

    public function __construct()
    {
        $this->SiaModel = new SiaModel();
    }

    public function index()
    {
        $item = [
            'sia' => $this->SiaModel->allData(),
        ];
        return view('v_kuliah', $item);
    }
    public function grafik()
    {
        $post = DB::table('sia')->get('*')->toArray();
        foreach ($post as $row) {
            $data[] = array(
                'label' => $row->nama_mkul,
                'y' => $row->jumlah_mhs
            );
        }
        return view('v_grafik', ['data' => $data]);
    }
    public function add()
    {
        return view('v_addkuliah');
    }
    public function insert()
    {
        Request()->validate(
            [
                'kd_mkul' => 'required|unique:sia,kd_mkul',
                'kd_dosen' => 'required|unique:sia,kd_dosen',
                'nama_mkul' => 'required',
                'jam' => 'required',
                'ruang_kelas' => 'required',
                'jumlah_mhs' => 'required',
                'tanggal_mulai' => 'required',
            ],
            [
                'kd_mkul.required' => 'wajib diisi !!',
                'kd_mkul.unique' => 'kode mata kuliah Ini Sudah Ada !!',
            ]
        );

        $item = [
            'kd_mkul' => Request()->kd_mkul,
            'kd_dosen' => Request()->kd_dosen,
            'nama_mkul' => Request()->nama_mkul,
            'jam' => Request()->jam,
            'ruang_kelas' => Request()->ruang_kelas,
            'jumlah_mhs' => Request()->jumlah_mhs,
            'tanggal_mulai' => Request()->tanggal_mulai,

        ];

        $this->SiaModel->addData($item);
        return redirect()->route('kuliah')->with('pesan', 'Data berhasil ditambahkan!!!');
    }

    public function delete($id)
    {
        $this->SiaModel->deleteData($id);
        return redirect()->route('kuliah');
    }
    public function edit($id)
    {

        $item = [
            'sia' => $this->SiaModel->detailData($id),
        ];

        return view('v_editkuliah', $item);
    }
    public function update($id)
    {
        Request()->validate(
            [
                'nama_mkul' => 'required',
                'jam' => 'required',
                'ruang_kelas' => 'required',
                'jumlah_mhs' => 'required',
                'tanggal_mulai' => 'required',
            ],
            [
                'kd_mkul.required' => 'wajib diisi !!',
                'kd_mkul.unique' => 'kode mata kuliah Ini Sudah Ada !!',
            ]
        );

        $item = [
            'kd_mkul' => Request()->kd_mkul,
            'kd_dosen' => Request()->kd_dosen,
            'nama_mkul' => Request()->nama_mkul,
            'jam' => Request()->jam,
            'ruang_kelas' => Request()->ruang_kelas,
            'jumlah_mhs' => Request()->jumlah_mhs,
            'tanggal_mulai' => Request()->tanggal_mulai,

        ];

        $this->SiaModel->editData($id, $item);
        return redirect()->route('kuliah')->with('pesan', 'Data berhasil update!!!');
    }
}

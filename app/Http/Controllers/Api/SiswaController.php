<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Http\Resources\SiswaResource;
use Illuminate\Support\Facades\Validator;



class SiswaController extends Controller
{
        public function index(){
            $siswas = Siswa::latest()->paginate(9);
            return new SiswaResource(true, 'List Data Siswa', $siswas);
        }

        public function store(Request $request) {
            $validator = Validator::make($request->all(), [
                'nis'     => 'required|numeric',
                'nama'   => 'required',
                'alamat'   => 'required',
                'no_hp'   => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $siswas = Siswa::create([
                'nis'     => $request->nis,
                'nama'   => $request->nama,
                'alamat'   => $request->alamat,
                'no_hp'   => $request->no_hp,
            ]);

            return new SiswaResource(true, 'Data Siswa Berhasil Ditambahkan!', $siswas);
        }

        public function show(Siswa $siswa)    {
            return new SiswaResource(true, 'Data Siswa Ditemukan!', $siswa);
        }

        public function update(Request $request, Siswa $siswas)
        {
            $validator = Validator::make($request->all(), [
                'nis'     => 'required|numeric',
                'nama'   => 'required',
                'alamat'   => 'required',
                'no_hp'   => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $siswas = Siswa::create([
                'nis'     => $request->nis,
                'nama'   => $request->nama,
                'alamat'   => $request->alamat,
                'no_hp'   => $request->no_hp,
            ]);

            return new SiswaResource(true, 'Data Siswa Berhasil Dirubah!', $siswas);
        }

        public function destroy(Siswa $siswa)
        {
            $siswa->delete();
            return new SiswaResource(true, 'Data Siswa Berhasil Dihapus!', null);
        }

}

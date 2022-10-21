<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(){

        
        $sql = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631170072', 'Fathan Pebrilliestyo Ganteng','laki-laki','Jl.Ninjaku No.1','New York','2004-02-17','fathan_mhs.png',now(),now())");
        dump($sql);

        
        $sql1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '2010631170989',
                'nama' => 'Rizki Hidayat',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Kilimanjaro No.12',
                'tempat_lahir' => 'Malang',
                'tanggal_lahir' => '2001=07=23',
                'photo' => 'dayat.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        
        $sql2 = Mahasiswa::create(
            [
                'npm' => '2010631170986',
                'nama' => 'Stepen Chen',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Pecinan No.12',
                'tempat_lahir' => 'Wuhan',
                'tanggal_lahir' => '2002-04-17',
                'photo' => 'chen.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        $sql = DB::select("SELECT * FROM mahasiswas");
        dd($sql);

        $sql2 = DB::table('mahasiswas')->get();
        dd($sql2);

        $sql3 = Mahasiswa::all();
        dd($sql3);
    }

    public function update(){

        $sql = DB::update("UPDATE mahasiswas SET alamat='JL.Ninjamu No.17',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        $sql1 = DB::table('mahasiswas')
        ->where('id','1')
        ->update(
            [
                'alamat' => 'JL.Pecinan No.12',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        $sql2 = Mahasiswa::where('id','1')->first()->update([
            'alamat' => 'JL.Pecinan No.12',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        $sql = DB::delete("DELETE FROM mahasiswas WHERE npm=?",['2010631170987']);
        dd($sql);

        $sql1 = DB::table('mahasiswas')
        ->where('npm','2010631170987')
        ->delete();
        dd($sql1);

        $sql2 = Mahasiswa::where('mahasiswas','2010631170987')->delete();
        dd($sql2);
    }
    
}

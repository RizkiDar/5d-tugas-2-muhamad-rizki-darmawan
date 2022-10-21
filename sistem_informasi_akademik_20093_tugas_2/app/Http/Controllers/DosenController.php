<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function insert(){
        
        $sql = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('0224078601', 'Fathan Pebrilliestyo M.Kom','laki-laki','Jl.Ninjaku No.1','Karawang','1999-02-17','fathan.png',now(),now())");
        dump($sql);

        $sql1 = DB::table('dosens')->insert(
            [
                'nidn' => '198709086606',
                'nama' => 'Ahmad Soubarjo',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.Karawitan No.33',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1987-09-21',
                'photo' => 'ahmad.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        $sql2 = Dosen::create(
            [
                'nidn' => '198709086603',
                'nama' => 'Puni Sukiani M.Pd',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Pecenongan No.43',
                'tempat_lahir' => 'Majalaya',
                'tanggal_lahir' => '1985-02-13',
                'photo' => 'puni.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
    }

    public function select(){

        
        $sql = DB::select("SELECT * FROM dosens");
        dd($sql);

        $sql2 = DB::table('dosens')->get();
        dd($sql2);

        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update(){

        $sql = DB::update("UPDATE dosens SET alamat='JL.Ninjamu No.17',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        $sql1 = DB::table('dosens')
        ->where('id','7')
        ->update(
            [
                'alamat' => 'JL.Kahuripan No.31',
                'updated_at' => now(),
            ]
            );
        dd($sql1);

        $sql2 = Dosen::where('id','6')->first()->update([
            'alamat' => 'JL.Kahuripan No.31',
            'updated_at' => now(),
        ]);
        dd($sql2);


    }

    public function delete(){

        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?",['198709086603']);
        dd($sql);

        $sql1 = DB::table('dosens')
        ->where('nidn','198709086604')
        ->delete();
        dd($sql1);

        $sql2 = Dosen::where('nidn','198709086603')->delete();
        dd($sql2);
    }
}

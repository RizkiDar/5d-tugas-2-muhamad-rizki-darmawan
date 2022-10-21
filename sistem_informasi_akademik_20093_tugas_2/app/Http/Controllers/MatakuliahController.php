<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function insert(){

        
        $sql = DB::insert("INSERT INTO matakuliahs (kode_mk,nama_mk,created_at,updated_at) VALUES ('JK01', 'Jaringan Komputer',now(),now())");
        dump($sql);
        // RAW

        
        $sql1 = DB::table('matakuliahs')->insert(
            [
                'kode_mk' => 'JK01',
                'nama_mk' => 'Jaringan Komputer',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);
        // SB

        
        $sql2 = Matakuliah::create(
            [
                'kode_mk' => 'JK01',
                'nama_mk' => 'Jaringan Komputer',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    } //ELOQUENT

    public function select(){

        
        $sql = DB::select("SELECT * FROM matakuliahs");
        dd($sql);
        // RAW

        
        $sql2 = DB::table('matakuliahs')->get();
        dd($sql2);
        // SB

        
        $sql3 = Matakuliah::all();
        dd($sql3);
        //ELOQUENT
    }

    public function update(){

        
        $sql = DB::update("UPDATE matakuliahs SET nama_mk='Jaringan Computer',updated_at=now() WHERE id=?",[1]);
        dd($sql);
        //RAW

        
        $sql1 = DB::table('matakuliahs')
        ->where('id','1')
        ->update(
            [
                'nama_mk' => 'Jaringan Computer',
                'updated_at' => now()
            ]
            );
        dd($sql1);
        //SB

        
        $sql2 = Matakuliah::where('id','1')->first()->update([
            'nama_mk' => 'Jaringan Computer',
            'updated_at' => now()
        ]);
        dd($sql2);
        #ELOQUENT

    }

    public function delete(){

        
        $sql = DB::delete("DELETE FROM matakuliahs WHERE id=?",[1]);
        dd($sql);
        //RAW

        
        $sql1 = DB::table('matakuliahs')
        ->where('id','1')
        ->delete();
        dd($sql1);
        //SB

        
        $sql2 = Matakuliah::where('id','1')->delete();
        dd($sql2);
        //ELOQUENT
    }
}

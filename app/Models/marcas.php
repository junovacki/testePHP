<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class marcas extends Model
{
    use HasFactory;

    public function registrarMarca($params){
        DB::table('marcas')->insert(array('nome_marca'=>$params['nome_marca']));

        return true;
    }

    public function atualizarMarca($params){
        DB::table('marcas')->where('id',$params['id'])->update(array('nome_marca'=>$params['nome_marca']));

        return true;
    }

    public function deletarMarca($params){
        DB::table('veiculos')->where('id_marca',$params['id'])->delete();
        DB::table('marcas')->where('id',$params['id'])->delete();

        return true;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class modelos extends Model
{
    use HasFactory;

    public function registrarModelo($params){
        DB::table('modelos')->insert(array('nome_modelo'=>$params['nome_modelo']));

        return true;
    }

    public function atualizarModelo($params){
        DB::table('modelos')->where('id',$params['id'])->update(array('nome_modelo'=>$params['nome_modelo']));

        return true;
    }

    public function deletarModelo($params){
        DB::table('veiculos')->where('id_modelo',$params['id'])->delete();
        DB::table('modelos')->where('id',$params['id'])->delete();

        return true;
    }
}

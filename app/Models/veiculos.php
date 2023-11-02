<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class veiculos extends Model
{
    use HasFactory;
    public function registrarVeiculo($params){
        DB::table('veiculos')->insert(array('preco'=>$params['preco'],'id_marca'=>$params['id_marca'],'id_modelo'=>$params['id_modelo'],'path_img'=>$params['path_img'],'nome'=>$params['nome']));

        return true;
    }

    public function atualizarVeiculo($params){
        DB::table('veiculos')->where('id',$params['id'])->update(array('preco'=>$params['preco'],'id_marca'=>$params['id_marca'],'id_modelo'=>$params['id_modelo'],'path_img'=>$params['path_img'],'nome'=>$params['nome']));

        return true;
    }

    public function deletarVeiculo($params){
        DB::table('veiculos')->where('id',$params['id'])->delete();

        return true;
    }
}

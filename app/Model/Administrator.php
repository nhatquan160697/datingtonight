<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Administrator extends Model
{
    protected $table = "administrator";
    protected $primaryKey = "id_admin";
    public $timestamps = false;

    public function getItems(){
    	return DB::table('administrator')->select('id_admin','username','password','fullname','name_role')->join('admin_role','administrator.id_role','=','admin_role.id_role')->get();
    }

    public function getItem($id){
    	return DB::table('administrator')->select('id_admin','username','password','fullname','name_role','administrator.id_role')->join('admin_role','administrator.id_role','=','admin_role.id_role')->where('id_admin','=',$id)->first();
    }
    public function getNameRoles(){
    	return DB::table('admin_role')->select('id_role','name_role')->get();
    }

    public function addItem($arItem){
    	return $this->insert($arItem);
    }

    public function editItem($id, $arItem){
        return $this->where('id_admin',$id)->update($arItem);
    }

    public function delItem($id){
        return $this->where('id_admin',$id)->delete();
    }
}

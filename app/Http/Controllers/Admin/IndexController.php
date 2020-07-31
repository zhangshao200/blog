<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\IndexModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index(){
      //查询表中的数据
      $a=IndexModel::orderBy('goods_id','desc')->limit(6)->get();
        //传值
      return view('index.index',['a'=>$a]);
  }

    /**
     * @param $id  商品的id
     * 详情页
     */
    public function desc($id){
        $a=IndexModel::where('goods_id',$id)->first();
//var_dump($a);die;
        return view('index.add',['a'=>$a]);

    }
}

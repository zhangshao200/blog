<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ComModel;
use App\Model\IndexModel;
use Illuminate\Http\Request;
//use App\Model\

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
        $asd=IndexModel::where('goods_id',$id)->first();
//var_dump($asd);die;
        //渲染页面传值

        $add=ComModel::get();
//        var_dump($add);die;
        return view('index.add',['asd'=>$asd,'add'=>$add]);
    }
}

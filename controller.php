<?php

namespace App\Http\Controllers;

use App\Models\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
  public function index(){

     //طریقه استفاده از حالت اول
   //را حذف کرده و بخش دوم را با حروف کوچک نوشت scope ساخته شده باید بخش اول  scope توجه:برای استفاده از 

    $files = Files::acvtive()->get();

}


public function update(){

       //طریقه استفاده از حالت دوم

    $username = 'abolfazl';
    $files = Files::User($username)->get();

}




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileStorage extends Controller
{
    public static function path($path){
        return pathinfo($path, PATHINFO_FILENAME);
    }

    public static function upload($file,$filename,$folder_path){
        $file_name=$file->getClientOriginalName();
        $extension=pathInfo($file_name,PATHINFO_BASENAME);
        $imageName='_'.time().'_'.$extension;

        $file->move(public_path($folder_path),$imageName);
        $result=url('/').'/'.$folder_path.'/'.$imageName;

        return $result;
    }
    public static function replace($path, $image, $public_id, $folder_path){
        self::delete($path, $folder_path);
        return self::upload($image, $public_id, $folder_path);
    }

    public static function delete($path, $folder_path){
        $host = url('/');
        $pathFile = substr($path, strlen($host)+1, strlen($path));
        if(File::exists(public_path($pathFile))){
            File::delete(public_path($pathFile));
            return "ok";
        }
        return "falla";
    }
}

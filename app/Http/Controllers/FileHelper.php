<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileHelper extends Controller
{
  public static function getFileDirName($file_dir){
    date_default_timezone_set('Asia/Tehran');
    $year_dir = date('Y', time());
    $month_dir = date('m', time());
    $file_dir = 'uploads/' . $file_dir . '/' . $year_dir . '/' . $month_dir;
    return $file_dir;
  }

  public static function getFileNewName(){
    date_default_timezone_set('Asia/Tehran');
    $day = date('d', time());
    $hour = date('h', time());
    $minute = date('i', time());
    $file_name = $day.'d'.$hour.'h'.$minute. 'm' .self::generateRandomString(10);
    return $file_name;
  }

  public static function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

}

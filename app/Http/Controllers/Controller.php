<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\Types\Null_;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    static public function assignObjArr($data, $new, $index_name) {
        foreach($index_name as $key => $val) {
            $new->$val = $data[$val] ?? 0;
        }
    }

    static public function resize_image($file, $target_width, $target_height, $save=FALSE) {
        list($original_width, $original_height) = getimagesize($file);
        if($original_height > $original_width) {
            $height = $target_height;
            $width = $original_width * $height / $original_height;
        } else {
            $width = $target_width;
            $height = $original_height * $width / $original_width;
        }
        if(!$save) $save = $file;
        Image::make($file)->resize($width, $height)->save($save);
    }
}

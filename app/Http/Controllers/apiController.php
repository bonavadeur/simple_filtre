<?php

namespace App\Http\Controllers;
use App\Http\Controllers\viewController;

use App\Models\category;
use App\Models\item;
use App\Models\import;
use App\Models\admin;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\_datatype;
use stdClass;
use Intervention\Image\Facades\Image;

class apiController extends Controller
{
    public function get1() {
        $data = _datatype::where('id', 1)->first();
        $result = json_decode($data->info);
        return response()->json($result);
    }

    public function getSpecs() {
        $spec = category::all();
        foreach($spec as $index => $value) {
            $value->spec = json_decode($value->spec);
        }
        return $spec;
    }

    public function filtre(Request $request) {
        $category = $request->category;
        if($category) {
            $result = item::where('category', $category);
            $specList = json_decode(category::where('category', $category)->value('spec'));
        } else {
            $result = item::where('id', '>', 0);
            $specList = json_decode('{"brand": {"filtre": "radio","hasMany": false}}');
        }
        
        if($request->range) $result = $result->where("price_1", '>', $request->range[0])->where("price_1", '<', $request->range[1]);

        foreach($specList as $specName => $detail) if($request->$specName != [] && $request->$specName != '') {
            if($detail->filtre == "radio" && $detail->hasMany == false){
                $result = $result->where('info->'.$specName, $request->$specName);
            }
            if($detail->filtre == "checkbox" && $detail->hasMany == false) {
                $result = $result->whereIn('info->'.$specName, $request->$specName);
            }
            if($detail->filtre == "checkbox" && $detail->hasMany == true) {
                foreach($request->$specName as $index => $purpose)
                    $result = $result->where('info->'.$specName, 'like', '%'.$purpose.'%');
            }
        }

        if($request->orderby == "increase") $result = $result->orderBy('price_1');
        if($request->orderby == "decrease") $result = $result->orderByDesc('price_1');
        $length = $result->get()->count();
        $data = $result->offset(20*($request->page - 1))->take(20)->get();
        $result = ["length" => $length, "data" => $data];
        return response()->json($result);
    }





    public function detail_item(Request $request) {
        $detail = item::where('id', $request->getContent())->get();
        return response()->json($detail[0]);
    }



    public function update_item(Request $request) {
        $image = $request->file('image');
        $update = json_decode($request->update);
        if($image) {
            $image->move('public/product/', $update->id . '.jpg');
            Controller::resize_image('public/product/' . $update->id . '.jpg', 180, 180, 'public/product_thumbnail/' . $update->id . '.jpg');
        }
        $list = ["name", "price_1", "price_2", "quantity", "sold", "category", "description"];
        $item = item::where('id', $update->id)->first();
        $item->info = json_encode($update->info);
        
        foreach($list as $key => $val) {
            $item->$val = $update->$val;
        }
        $item->save();
        return response()->json("OK");
    }



    public function search_item(Request $request) {
        // $request = $request->getContent();
        $data = explode(' ', $request->data);
        $result = item::where('id', '>', 0);
        foreach($data as $idx => $word) {
            $result = $result->where('name', 'like', '%' . $word . '%');
            // else $result = $result->orWhere('name', 'like', '%' . $word . '%');
        }
        $length = $result->get()->count();
        $data = $result->offset(20*($request->page - 1))->take(20)->get();
        $result = ["length" => $length, "data" => $data];
        // return 1;
        return response()->json($result);
    }



    public function add_item(Request $request) {
        $image = $request->file('image');
        $add = json_decode($request->add);
        $item = new item;
        $item->id = item::max('id') + 1;
        
        if($image) {
            $image->move('public/product/', $item->id . '.jpg');
            Controller::resize_image('public/product/' . $item->id . '.jpg', 180, 180, 'public/product_thumbnail/' . $item->id . '.jpg');
        }
        $list = ["name", "price_1", "price_2", "category", "description"];
        
        $add->specs->image = $item->id;
        $add->specs->video = "";
        $item->info = json_encode($add->specs);
        $item->quantity = 0;
        $item->sold = 0;
        
        foreach($list as $key => $val) {
            $item->$val = $add->$val;
        }
        $item->save();
        return response()->json("OK");
    }



    public function import_products(Request $request) {
        $request = json_decode($request->getContent());
        $import = new import();
        $import->admin = admin::where('name', $request->admin)->value('id');
        $import->provider = json_encode($request->provider);
        $import->detail = json_encode($request->detail);
        $import->date = $request->time;
        $import->save();
        return response()->json("OK");
    }



    public function update_admin_info(Request $request) {
        $image = $request->file('image');
        $info = json_decode($request->info);
        $admin = admin::where('id', $info->id)->first();
        
        if($image) {
            $image->move('public/admin_images/avt/', $info->id . '.jpg');
            // Controller::resize_image('public/product/' . $item->id . '.jpg', 180, 180, 'public/product_thumbnail/' . $item->id . '.jpg');
        }

        $admin->name = $info->name;
        $admin->email = $info->email;
        $admin->password = $info->password;
        $admin->storage_name = $info->storage_name;
        $admin->storage_addr = $info->storage_addr;
        
        $admin->save();
        return response()->json("OK");
    }



    public function post1(Request $request) {
        $data = json_decode($request->getContent());
        $new = new _datatype();
        $new->name = $data->name;
        unset($data->name);
        $new->info = json_encode($data);
        // $new->save();
        return response()->json($data);
    }
}

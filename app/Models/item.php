<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use stdClass;

use App\Models\category;

class item extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'item';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'price_1', 'price_2', 'description', 'quantity', 'sold', 'info'
    ];
    // static public $ownSpecs = ["brand"] ;
    // static public $commonSpecs = [
    //     "body" => ["type", "sensor"],
    //     "lens" => ["body", "sensor", "purpose"],
    //     "flash" => ["body", "power"],
    // ];

    static protected function getCategory() {
        $category = self::select('category')->distinct()->get();
        foreach($category as $key => $val) $category[$key] = $val->category;
        return $category;
    }

    static protected function getSpecs($category) {
        $specList = [];
        foreach($category as $key => $_category) {
            $specList[$_category] = json_decode(category::where('name', $_category)->value('spec'));
            // array_splice($specList[$_category], 0, 1);
            unset($specList[$_category]->brand);
        }
        $specList = (array) $specList;
        return $specList;
    }

    static protected function initialSpecs() {
        $category = self::getCategory();
        $specList = self::getSpecs($category);

        foreach($specList as $category => $spec) {
            $info = json_decode(json_decode(self::where('category', $category)->select('info')->first(), TRUE)["info"]);
            foreach($spec as $_spec => $val) {
                if(is_array($info->$_spec)) $specList[$category]->$_spec = 1;
                else $specList[$category]->$_spec = 0;
                // array_splice($specList[$category], 0, 1);
            }
        }
        return $specList;
    }

    static public function getAttr() {
        $specList = self::initialSpecs();
        $specName = self::getSpecs(self::getCategory());
        foreach($specList as $category => $_list) {
            foreach($_list as $name => $value) {
                if($value == 0) {
                    $distinct = json_decode(self::where('category', $category)->select('info->'.$name)->distinct()->get());
                    foreach($distinct as $index => $_val) {
                        $_val = array_values((array) $_val);
                        $distinct[$index] = $_val[0];
                    }
                    $specList[$category]->$name = [
                        "name" => $specName[$category]->$name,
                        "spec" => $distinct
                    ];
                } else {
                    $specList[$category]->$name = [
                        "name" => $specName[$category]->$name,
                        "spec" => ["fix", "tele", "general", "wide", "macro", "portrait", "fisheye", "cine", "tshift", "extender"]
                    ];
                    // $specList[$category][$name]["spec"] = ["fix", "tele", "general", "wide", "macro", "portrait", "fisheye", "cine", "tshift", "extender"];
                }
            }
        }
        $brandList = json_decode(self::select('info->brand')->distinct()->get());
        foreach($brandList as $index => $_val) {
            $_val = array_values((array) $_val);
            $brandList[$index] = $_val[0];
        }
        $attrList["common"] = [
            "brand" => [
                "name" => "Thương Hiệu",
                "spec" => $brandList
            ]
        ];
        $attrList["own"] = $specList;
        return $attrList;
        // return $specList;
    }
}

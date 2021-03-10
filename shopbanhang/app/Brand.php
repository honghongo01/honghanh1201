<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
        //không cho chạy ceate at và update
        public $timestamps = false; //set time to false
        //có thể làm đầy(có thể update) các cột của bangt
        protected $fillable = [
            'brand_name', 'brand_slug', 'brand_desc','brand_status'
        ];
        //khóa chính
        protected $primaryKey = 'brand_id';
        //tên table
         protected $table = 'tbl_brand';
}

<?php namespace App\Models;


class GoodsCategoryModel extends BaseModel
{
    protected $table = 'goods_category';
    protected $fillable = array(
        'category_name',
        'category_pid',
        'category_depth',
        'category_status',
        'category_priority',
        'ctime',
        
    );

    

}
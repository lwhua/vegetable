<?php namespace App\Models;


class GoodsAttrModel extends BaseModel
{
    protected $table = 'goods_attr';
    protected $fillable = array(
        'attr_name',
        'provider_logo',
        'attr_value',
        'state',
        'ctime',
        
    );

    

}
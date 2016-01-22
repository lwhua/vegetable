<?php namespace App\Models;


class GoodsModel extends BaseModel
{
    protected $table = 'goods';
    protected $fillable = array(
        'good_name',
        'good_summary',
        'good_detail',
        'good_price',
        'good_sales',
        'good_image',

        'good_stock',
        'attr_id',
        'is_hot',
        'is_new',
        'is_alive',
        'brand_id',
        'keywords',
        'add_time',
        'uid',
        'provider_id',
        'cid'
    );

    public function brand()
    {
        $this->hasOne('App\Models\GoodsBrandModel','brand_id','good_brand_id');
    }

    public function category()
    {
        $this->hasOne('App\Models\GoodsCategoryModel','cid','id');
    }

    public function provider()
    {
        $this->hasOne('App\Models\GoodsProviderModel','provider_id','id');
    }

    public function attr()
    {
        $this->hasMany('App\Models\GoodsAttrModel','attr_id','id');
    }

}
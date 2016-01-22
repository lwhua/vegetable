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
        $this->hasOne('App\Models\GoodsBrandModel','good_brand_id','brand_id');
    }

    public function category()
    {
        $this->hasOne('App\Models\GoodsCategoryModel','id','cid');
    }

    public function provider()
    {
        $this->hasOne('App\Models\GoodsProviderModel','id','provider_id');
    }

    public function attr()
    {
        $this->hasMany('App\Models\GoodsAttrModel','id','attr_id');
    }

}
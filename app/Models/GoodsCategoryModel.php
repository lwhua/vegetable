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

    public function goods()
    {
        $this->belongsTo('App\Models\GoodsModel');
    }

    public function parent()
    {
        return $this->belongsTo('\App\Models\GoodsCategoryModel','category_pid','id');
    }

    public function children()
    {
        return $this->hasMany('\App\Models\GoodsCategoryModel','category_pid','id');
    }

}
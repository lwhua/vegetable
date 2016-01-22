<?php namespace App\Models;


class GoodsProviderModel extends BaseModel
{
    protected $table = 'goods_provider';
    protected $fillable = array(
        'provider_name',
        'provider_logo',
        'provider_sumary',
        'provider_state',
        'provider_addr',
        'provider_tel',
        'ctime',
        
    );

    public function goods()
    {
        $this->belongsTo('App\Models\GoodsModel');
    }

}
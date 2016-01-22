
<?php namespace App\Models;


class GoodsBrandModel extends BaseModel
{
    protected $table = 'goods_brand';
    protected $fillable = array(
        'name',
        
    );

    public function goods()
    {
        $this->belongsTo('App\Models\GoodsModel');
    }

}
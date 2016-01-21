<?php
namespace App\Repositories;
use App\Models\GoodsModel;
class GoodRepository extends BaseRepository
{
    protected $name = 'goods';

    /**
     *
     * @param ActionModel $role
     */
    public function __construct(GoodsModel $goods)
    {
        $this->model = $goods;
    }

    /**
     * @param int $pageSize
     * @return mixed
     */
    public function index()
    {
        return array('goods' => $this->model->with('brand')->paginate(15));
    }

    public function store($value='')
    {
        $goods = parent::store($value);
        Cache::forget('goods');

        return $goods;
    }
    public function destroy($id)
    {
        $goods = $this->getById($id);
        /**
         * 递归删除所有子节点
         */
        if (!$goods->children->isEmpty()) {
            foreach ($goods->children as $subaction) {
                $goods->destroy($subaction->id);
            }
        }
        $action->delete();
    }

    public function all()
    {
        return $this->model->where('pid', 0)->get();
    }

}



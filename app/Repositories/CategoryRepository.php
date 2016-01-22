<?php
namespace App\Repositories;
// use App\Models\GoodsModel;
use App\Models\GoodsCategoryModel;
class CategoryRepository extends BaseRepository
{
    protected $name = 'goods_category';

    /**
     *
     * @param ActionModel $role
     */
    public function __construct(GoodsCategoryModel $category)
    {
        $this->model = $category;
    }

    /**
     * @param int $pageSize
     * @return mixed
     */
    public function index()
    {
        $category = $this->model->where('category_pid', 0)->with('children')->get(['id','category_name as text']);
        
        $category = array('children'=>$category,'id'=>'0','text'=>'根目录');
        
        return ['data'=>array('category' => json_encode($category,JSON_UNESCAPED_UNICODE))];
    }

    public function store($value='')
    {
        
        $node_val = json_decode($value['node_val']);
        // dd($node_val);
        // $category = parent::store($value);
        $node_val = $this->parseData($node_val);
        // dd($node_val);
        // DB::table('users')->truncate();
        $this->model->truncate();

        static $tempNode,$tempid;
        foreach ($node_val as $key => $node) {
            $originNode = $node;
            unset($node['id']);
            // dd($node);
            
            if ($tempid && $tempNode['id'] == $originNode['category_pid']) {
                $node['category_pid'] = $tempid;
                
            }
            $tempid = $this->model->insertGetId($node);
            
            $tempNode = $originNode;
        }
        

        return $tempid;
    }


    public function destroy($id)
    {
        $category = $this->getById($id);
        /**
         * 递归删除所有子节点
         */
        if (!$category->children->isEmpty()) {
            foreach ($category->children as $subaction) {
                $category->destroy($subaction->id);
            }
        }
        $action->delete();
    }

    public function all()
    {
        return $this->model->where('category_pid', 0)->get();
    }

    // public function category($pid,GoodsCategoryModel $category)
    // {
    //     $model = $category::where('pid',$pid)->get();
    //     return $model->children();
    // }

    public function parseData($node)
    {
        static $result = [];
        if (empty($node)) {
            return;
        }
        foreach ($node as $key => $value) {
            
            if ($value->parent == "#") {
                continue;
            }
            // var_dump($value);
            // var_dump($value->parent);
            // dd($value);
            $temp['category_name'] = $value->text;
            $temp['category_pid'] = $value->parent;
            $temp['category_status'] = 1;
            $temp['category_depth'] = 1;
            $temp['ctime'] = time();
            $temp['id'] = $value->id;
            array_push($result,$temp);

        }
        return $result;
    }
}



<?php

use App\Models\ActionModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\RoleModel;

use App\User;

class DatabaseSeeder extends Seeder
{
    private $admin;
    private $test1;
    private $test2;

    private $role1;
    private $role2;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('user')->truncate();
        DB::table('action')->truncate();
        DB::table('role')->truncate();
        DB::table('role_action')->truncate();


        $left_bar = array();
        $left_bar[] = $this->home();
        $left_bar[] = $this->module1();
        $left_bar[] = $this->module2();
        $left_bar[] = $this->module3();
        $this->testUser();
        $this->testRole();
        $this->test1->role_id = $this->role1->id;
        $this->test2->role_id = $this->role2->id;
        $this->test1->save();
        $this->test2->save();
        $this->action_seed($left_bar);

        // User::create([
        // 'name' => 'admin',
        // 'phone' => '18102268011',
        // 'password' => Hash::make('admin'),
        // 'is_admin' => 1,
        // 'email'=>'870089402@qq.com',
        // // 'ip' => $_SERVER["REMOTE_ADDR"],
        // ]);

        // User::create([
        // 'name' => 'test1',
        // 'password' => Hash::make('123456'),
        // 'email'=>'870089403@qq.com',
        // 'phone' => '18102268012',
        // // 'ip' => $_SERVER["REMOTE_ADDR"],
        // ]);

        // User::create([
        // 'name' => 'test2',
        // 'password' => Hash::make('654321'),
        // 'email'=>'870089404@qq.com',
        // 'phone' => '18102268013',
        // // 'ip' => $_SERVER["REMOTE_ADDR"],
        // ]);

        // $this->call('UserTableSeeder');
	// Model::guard();
    }

    private function testRole()
    {
        $this->role1 = RoleModel::create(array(
            'role_name'   => '测试模块1管理员',
            'description' => '管理测试模块1的'
        ));

        $this->role2 = RoleModel::create(array(
            'role_name'   => '测试模块2管理员',
            'description' => '管理测试模块2的'
        ));

    }

    private function testUser()
    {
        $this->admin = UserModel::create(array(
            'user_name' => 'admin',
            'real_name' => 'liwh',
            'email'     => '870089402@qq.com',
            'is_admin'  => 1,
            'password'  => Hash::make('admin')
        ));
        $this->test1 = UserModel::create(array(
            'user_name' => 'test1',
            'real_name' => 'test1',
            'email'     => '1084672179@qq.com',
            'password'  => Hash::make('test1')
        ));
        $this->test2 = UserModel::create(array(
            'user_name' => 'test2',
            'real_name' => 'test2',
            'email'     => 'test2@qq.com',
            'password'  => Hash::make('test2')

        ));
    }

    private function action_seed($left_bar, $pid = 0)
    {
        foreach ($left_bar as $val) {
            $model = ActionModel::create(array(
                'action_name'      => $val['action_name'],
                'pid'              => $pid,
                'action'           => $val['action'],
                'action_namespace' => $val['action_namespace'],
                'action_class'     => $val['action_class'],
                'action_method'    => $val['action_method'],
                'created'          => time(),
                'prefix_class'     => $val['prefix_class']
            ));
            if (isset($val['children']) && $val['children']) {
                $this->action_seed($val['children'], $model->id);
            }
            if ($val['action_class'] == 'Test1Controller' || $val['action_name'] == '测试模块1') {
                $this->role1->actions()->save($model);
            }
            if ($val['action_class'] == 'Test2Controller' || $val['action_name'] == '测试模块2') {
                $this->role2->actions()->save($model);
            }
            if ($val['action_class'] == 'HomeController') {
                $this->role1->actions()->save($model);
                $this->role2->actions()->save($model);
            }
        }
    }

    private function home()
    {
        return array(
            'prefix_class'     => 'am-icon-home',
            'action_name'      => '首页',
            'action'           => 'Admin\HomeController@index',
            'action_namespace' => 'App\Http\Controllers\Admin',
            'action_class'     => 'HomeController',
            'action_method'    => 'index'
        );
    }

    private function module1()
    {
        return array(
            'prefix_class'     => 'am-icon-gear',
            'action_name'      => '权限管理',
            'action'           => '',
            'action_namespace' => 'App\Http\Controllers\Admin',
            'action_class'     => '',
            'action_method'    => '',
            'children'         => array(
                array(
                    'prefix_class'     => 'am-icon-user',
                    'action_name'      => '用户管理',
                    'action'           => 'Admin\UserController@index',
                    'action_namespace' => 'App\Http\Controllers\Admin',
                    'action_class'     => 'UserController',
                    'action_method'    => 'index',
                    'children'         => array(array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '浏览',
                        'action'           => 'Admin\UserController@index',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'UserController',
                        'action_method'    => 'index'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '编辑',
                        'action'           => 'Admin\UserController@edit',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'UserController',
                        'action_method'    => 'edit'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '更新',
                        'action'           => 'Admin\UserController@update',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'UserController',
                        'action_method'    => 'update'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '创建',
                        'action'           => 'Admin\UserController@create',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'UserController',
                        'action_method'    => 'create'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '添加',
                        'action'           => 'Admin\UserController@store',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'UserController',
                        'action_method'    => 'store'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '删除',
                        'action'           => 'Admin\UserController@destroy',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'UserController',
                        'action_method'    => 'destroy'
                    ))
                ), array(
                    'prefix_class'     => 'am-icon-users',
                    'action_name'      => '角色管理',
                    'action'           => 'Admin\RoleController@index',
                    'action_namespace' => 'App\Http\Controllers\Admin',
                    'action_class'     => 'RoleController',
                    'action_method'    => 'index',
                    'children'         => array(array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '浏览',
                        'action'           => 'Admin\RoleController@index',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'RoleController',
                        'action_method'    => 'index'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '编辑',
                        'action'           => 'Admin\RoleController@edit',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'RoleController',
                        'action_method'    => 'index'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '更新',
                        'action'           => 'Admin\RoleController@update',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'RoleController',
                        'action_method'    => 'update'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '创建',
                        'action'           => 'Admin\RoleController@store',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'RoleController',
                        'action_method'    => 'create'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '添加',
                        'action'           => 'Admin\RoleController@store',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'RoleController',
                        'action_method'    => 'store'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '删除',
                        'action'           => 'Admin\RoleController@destroy',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'RoleController',
                        'action_method'    => 'destroy'
                    ))
                ), array(
                    'prefix_class'     => 'am-icon-puzzle-piece',
                    'action_name'      => '操作管理',
                    'action'           => 'Admin\ActionController@index',
                    'action_namespace' => 'App\Http\Controllers\Admin',
                    'action_class'     => 'ActionController',
                    'action_method'    => 'index',
                    'children'         => array(array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '浏览',
                        'action'           => 'Admin\ActionController@index',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'ActionController',
                        'action_method'    => 'index'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '编辑',
                        'action'           => 'Admin\ActionController@edit',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'ActionController',
                        'action_method'    => 'edit'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '更新',
                        'action'           => 'Admin\ActionController@update',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'ActionController',
                        'action_method'    => 'update'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '创建',
                        'action'           => 'Admin\ActionController@create',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'ActionController',
                        'action_method'    => 'create'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '添加',
                        'action'           => 'Admin\ActionController@store',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'ActionController',
                        'action_method'    => 'store'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '删除',
                        'action'           => 'Admin\ActionController@destroy',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'ActionController',
                        'action_method'    => 'destroy'
                    ))
                )
            )
        );
    }

    private function module2()
    {
        return array(
            'prefix_class'     => 'am-icon-gear',
            'action_name'      => '测试模块1',
            'action'           => '',
            'action_namespace' => 'App\Http\Controllers\Admin',
            'action_class'     => '',
            'action_method'    => '',
            'children'         => array(
                array(
                    'prefix_class'     => 'am-icon-user',
                    'action_name'      => '测试1',
                    'action'           => 'Admin\Test1Controller@index',
                    'action_namespace' => 'App\Http\Controllers\Admin',
                    'action_class'     => 'Test1Controller',
                    'action_method'    => 'index',
                    'children'         => array(array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '浏览',
                        'action'           => 'Admin\Test1Controller@index',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test1Controller',
                        'action_method'    => 'index'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '编辑',
                        'action'           => 'Admin\Test1Controller@edit',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test1Controller',
                        'action_method'    => 'edit'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '更新',
                        'action'           => 'Admin\Test1Controller@update',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test1Controller',
                        'action_method'    => 'update'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '创建',
                        'action'           => 'Admin\Test1Controller@create',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test1Controller',
                        'action_method'    => 'create'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '添加',
                        'action'           => 'Admin\Test1Controller@store',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test1Controller',
                        'action_method'    => 'store'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '删除',
                        'action'           => 'Test1Controller@destroy',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test1Controller',
                        'action_method'    => 'destroy'
                    ))
                )
            )
        );
    }

    private function module3()
    {
        return array(
            'prefix_class'     => 'am-icon-gear',
            'action_name'      => '测试模块2',
            'action'           => '',
            'action_namespace' => 'App\Http\Controllers\Admin',
            'action_class'     => '',
            'action_method'    => '',
            'children'         => array(
                array(
                    'prefix_class'     => 'am-icon-user',
                    'action_name'      => '测试2',
                    'action'           => 'Admin\Test2Controller@index',
                    'action_namespace' => 'App\Http\Controllers\Admin',
                    'action_class'     => 'Test2Controller',
                    'action_method'    => 'index',
                    'children'         => array(array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '浏览',
                        'action'           => 'Admin\Test2Controller@index',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test2Controller',
                        'action_method'    => 'index'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '编辑',
                        'action'           => 'Admin\Test2Controller@edit',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test2Controller',
                        'action_method'    => 'edit'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '更新',
                        'action'           => 'Admin\Test2Controller@update',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test2Controller',
                        'action_method'    => 'update'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '创建',
                        'action'           => 'Admin\Test2Controller@create',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test2Controller',
                        'action_method'    => 'create'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '添加',
                        'action'           => 'Admin\Test2Controller@store',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test2Controller',
                        'action_method'    => 'store'
                    ), array(
                        'prefix_class'     => 'am-icon-user',
                        'action_name'      => '删除',
                        'action'           => 'Admin\Test2Controller@destroy',
                        'action_namespace' => 'App\Http\Controllers\Admin',
                        'action_class'     => 'Test2Controller',
                        'action_method'    => 'destroy'
                    ))
                )
            )
        );
    }
}

<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Overtrue\Wechat\Server;
use Overtrue\Wechat\Message;

class WechatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 处理微信的请求消息
     *
     * @param Overtrue\Wechat\Server $server
     *
     * @return string
     */
    public function serve(Server $server)
    {
        $server->on('event', function($event){
	    switch (strtolower($event->Event)){
		case "subscribe":
		    // 关注时候二维码key EventKey
		    return Message::make('text')->content('感谢您关注');
		    // 添加关注者信息
		   DB::table('follow')->insert(
			['openid'=>$event->FromUserName,'token'=>$event->ToUserName]	
		   );
		break;
		case "unsubscribe":

		break;
		case "location":

	            return Message::make('text')->content('定位！');
		break;
		case "click":

	            return Message::make('text')->content('点击事件！');
		break;

	    }
        });
	// 监听所有类型
	$server->on('message', function($message) {
	   switch(strtolower($message->MsgType)){
	      case "text":
		
	    	return Message::make('text')->content('您好！');
		break;
	      case "image":
		
		break;
	      case "location":

		break;
	      case "link":
		
		break;
	      case "voice":

		break;
	      case "music":

		break;
	      case "video":

		break;
	      case "news":

		break;

	    }
	});
        return $server->serve(); // 或者 return $server;
    }

}

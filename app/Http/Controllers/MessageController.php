<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;
use App\Thread;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $thread_id = $request->thread_id;
        $items = Message::where('thread_id', $thread_id)->get();
        $thread= Thread::where('id', $thread_id)->first();

        $thread_name=$thread->name;
        return view('keijiban.thre', [
            'items' => $items,
            'thread_name' => $thread_name,
            'thread_id' => $thread_id,
        ]);
    }

    public function add(Request $request)
    {
        return view('keijiban.thre');
    }

    public function create(Request $request)
    {
        $message = new Message;
//        $form = $request->all();
//        unset($form['_token']);
//        $message->fill($form)->save();
        $message->content= $request->text;
        $message->time = date('Y年m月d日 H時i分s秒');
        $message->save();

        return redirect('/keijiban/thre')
            ->withInput(['thread_id'=>$request->thread_id]);


    }
}

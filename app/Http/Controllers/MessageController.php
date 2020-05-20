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
        return view('keijiban.thre', [
            'items' => $items,
            'thread' => $thread,
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
        $message->content = $request->msg;
        $message->thread_id = $request->thread_id;

//        unset($form['_token']);
//        $message->fill($form)->save();
        $message->time = date('Y年m月d日 H時i分s秒');
        $message->save();
        $thread_id = $request->thread_id;
//        $thread= Thread::where('id', $thread_id)->first();

//        return view('keijiban.thre',['thread_id'=>$thread_id]);
        return redirect(route('thre',['thread_id'=>$thread_id]));
    }
}

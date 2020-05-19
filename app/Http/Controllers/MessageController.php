<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;

class MessageController extends Controller
{
    public function index($thread_id)
    {
        $items = Message::where('thread_id', $thread_id)->get();
        return view('keijiban.thre', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('keijiban.thre');
    }

    public function create(Request $request)
    {
        $message= new Message;
        $form = $request->all();
        unset($form['_token']);
        $message->fill($form)->save();
        $message->time = date('Y年m月d日 H時i分s秒');
        $message->save();
        return redirect('/keijiban/message');
    }
}

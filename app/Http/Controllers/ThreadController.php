<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(Request $request)
    {
        $items = Thread::all();
        return view('keijiban.index', ['items' => $items]);
    }

    public function search(Request $request)
    {
        $items = Thread::where('name','like','%' .  $request->input . '%')->get();
        return view('keijiban.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('keijiban.thre');
    }

    public function create(Request $request)
    {
        $thread= new Thread;
        $form = $request->all();
        unset($form['_token']);
        $thread->fill($form)->save();
        $thread->time = date('Y年m月d日 H時i分s秒');
        $thread->save();
        return redirect('/keijiban/thre');
    }

    public function post(Request $request)
    {
        if ($request->post_type == 'create') {
            $thread = new Thread;
//            $form = $request->all();
//            unset($form['_token']);
//            unset($form['post_type']);
//            $thread->fill($form)->save();

            $thread->name = $request->name;
            $thread->time = date('Y年m月d日 H時i分s秒');
            $thread->save();
            return redirect('/keijiban');
        } else
            {
            $items = Thread::where('name', 'like', '%' . $request->input . '%')->get();
            return view('keijiban.index', ['items' => $items]);
            }
    }

}

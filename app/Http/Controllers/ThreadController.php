<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $threads = Thread::latest()->get();
    return view('threads.index', compact('threads'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $channels = Channel::latest()->get();
    return view('threads.create', compact('channels'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
        'channel_id' => 'required|exists:channels,id'
    ]);

    $thread = Thread::create($request->all() + ['user_id' => 1]);

    return redirect('/threads/' . $thread->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Thread $thread
   * @return \Illuminate\Http\Response
   */
  public function show(Channel $channel, Thread $thread)
  {
    $replies = $thread->replies()->latest()->get();
    return view('threads.show', compact(['thread', 'replies']));

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Thread $thread
   * @return \Illuminate\Http\Response
   */
  public function edit(Thread $thread)
  {
    $channels = Channel::latest()->get();
    return view('threads.edit', compact(['thread', 'channels']));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \App\Thread $thread
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Thread $thread)
  {
    $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
        'channel_id' => 'required|exists:channels,id'
    ]);

    $thread->update($request->all() + ['user_id' => 1]);

    return redirect('/threads/' . $thread->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Thread $thread
   * @return \Illuminate\Http\Response
   */
  public function destroy(Thread $thread)
  {
    //
  }

  public function reply(Thread $thread, Request $request)
  {
    $this->validate($request, [
        'body' => 'required'
    ]);

    $thread->reply($request->body);
  }
}

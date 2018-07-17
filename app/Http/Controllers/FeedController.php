<?php

namespace App\Http\Controllers;

use App\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $feeds = Feed::latest()->get();
    return view('feeds.index', compact('feeds'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('feeds.create');
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
        'body' => 'required'
    ]);

    $path = null;

    if ($request->has('preview')) {
      $path = request()->file('preview')->store('public');
    }

    $feed = Feed::create([
        'user_id' => auth()->id(),
        'title' => $request->title,
        'body' => $request->body,
        'preview' => $path
    ]);

    return redirect('feed/' . $feed->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Feed $feed
   * @return \Illuminate\Http\Response
   */
  public function show(Feed $feed)
  {
    $replies = $feed->replies()->latest()->get();
    return view('feeds.show', [
        'feed' => $feed,
        'replies' => $replies
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Feed $feed
   * @return \Illuminate\Http\Response
   */
  public function edit(Feed $feed)
  {
    return view('feeds.edit', compact('feed'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \App\Feed $feed
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Feed $feed)
  {
    $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
    ]);

    $path = null;

    if ($request->has('preview')) {
      Storage::delete($request->preview);
      $path = request()->file('preview')->store('public/');
    } else {
      $path = $feed->preview;
    }

    $feed->update([
        'user_id' => auth()->id(),
        'preview' => $path,
        'title' => $request->title,
        'body' => $request->body
    ]);
    return redirect('/feed/' . $feed->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Feed $feed
   * @return \Illuminate\Http\Response
   */
  public function destroy(Feed $feed)
  {
    $feed->delete();

    return redirect('/');
  }

  public function reply(Feed $feed, Request $request)
  {
    $this->validate($request, [
        'body' => 'required'
    ]);

    $feed->reply($request->body);

    return back();
  }
}

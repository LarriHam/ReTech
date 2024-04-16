<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Comment;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();

        return view('admin.comments.index', [
            'comments' => $comments
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.comments.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'text' => 'required|text|min:10|max:10000000',
            'date' => 'required|string|min:2|max:1000',
            'user_id' => 'required|exists:users,id',
        ];

        $comment = new Comment;
        $comment->text = $request->text;
        $comment->date = $request->date;
        $comment->user_id = $request->user_id;
    
        $comment->save();

        return redirect()
            ->route('admin.comments.index')
            ->with('status', 'Created a new comment!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);

        return view('admin.comments.show')->with('comment', $comment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comments.edit', [
            'comment' => $comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation rules
        $rules = [

            'text' => 'required|text|min:10|max:10000000',
            'date' => 'required|string|min:2|max:1000',
            'user_id' => 'required|exists:users,id',

        ];

        $comment = Comment::findOrFail($id);

        $comment->text = $request->text;
        $comment->date = $request->date;
        $comment->user_id = $request->user_id;       

        $comment->save();

        return redirect()->route('admin.comments.index')->with('status', 'Updated comment!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::findOrFail($id);

        $comment->delete();

        return redirect()->route('admin.comments.index')->with('status', 'Selected Comment Deleted Successfully');
    }
}

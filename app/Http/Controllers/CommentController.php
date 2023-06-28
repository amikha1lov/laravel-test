<?php

namespace App\Http\Controllers;

use App\Facades\Comment;
use App\Http\Requests\Comment\CreateCommentRequest;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function create(CreateCommentRequest $request)
    {
        Comment::create(
            $request->validated()
        );

        return new Response(['success' => true]);
    }
}

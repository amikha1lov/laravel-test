<?php

namespace App\Http\Controllers\Api\v1;

use App\Facades\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\CreateCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(CreateCommentRequest $request)
    {
        Comment::create(
            $request->validated()
        );

        return [
            'status' => 'success'
        ];
    }
}

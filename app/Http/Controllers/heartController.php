<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class heartController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function form()
    {
        return view('dashboard.form');
    }

    public function store(Request $request)
    {

        $request->validate([
            'caption' => 'required',
            'likes' => 'required|integer',
            'comments' => 'required|integer',
        ]);

        Content::create(
            [
                'user_id' => Auth::user()->id,
                'caption' => $request->caption,
                'likes' => $request->likes,
                'comments' => $request->comments,9
            ]
        );

        return redirect()->route('dahsboard')->with('success','content has been saved');
    }
}

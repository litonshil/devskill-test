<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function edit($meeting_id, Request $request)
    {
        $data['m_id'] = $meeting_id;
        $data['list_type'] = $request->listType;
        return view('meeting_edit', $data);
    }
}

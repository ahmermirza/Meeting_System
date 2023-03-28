<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function list()
    {
        $meetings = Meeting::all();
        return view('meetings.index', compact('meetings'));
    }

    public function create()
    {
        return view('meetings.create');
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'time'  => 'required',
        ]);

        Meeting::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'time' => strpos($request->time, 'AM') ? str_replace(' AM', '', $request->time) : str_replace(' PM', '', $request->time),
        ]);

        return redirect()->route('meetings');
    }

    public function get(Meeting $meeting)
    {
        return view('meetings.get', compact('meeting'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            // 'time'  => 'required|date_format:m/d/Y h:i:s',
        ]);

        Meeting::where('id', $request->id)->update([
            'email' => $request->email,
            'subject' => $request->subject,
            'time' => strpos($request->time, 'AM') ? str_replace(' AM', '', $request->time) : str_replace(' PM', '', $request->time),
        ]);

        return redirect()->route('meetings');
    }

    public function destroy(Meeting $meeting)
    {
        $meeting->delete();
        return back();
    }
}

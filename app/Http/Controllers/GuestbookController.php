<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GuestbookController extends Controller {
    public function guestbook() {
        return view('pages.guestbook');
    }

    public function guestbookPost(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required'
        ]);

        DB::insert('INSERT INTO guestbook_entries (name, timestamp, ip_address, agent, message) values (?, ?, ?, ?, ?)', array(
            htmlspecialchars($request->get('name')),
            time(),
            $request->ip(),
            $request->userAgent(),
            htmlspecialchars($request->get('message'))
        ));

        return back()->with('success', 'Entry submitted successfully!');
    }
}

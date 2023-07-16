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

        $matching_bans = DB::select('SELECT reason FROM guestbook_bans WHERE ip_address = ?', array($request->ip()));

        if (count($matching_bans) > 0 ) {
            return view('errors.guestbook-ipban')->with('reason', $matching_bans[0]->reason);
        }

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

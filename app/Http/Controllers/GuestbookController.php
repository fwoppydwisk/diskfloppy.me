<?php

namespace App\Http\Controllers;

use App\Models\GuestbookEntry;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use UAParser\Parser;

class GuestbookController extends Controller {
    public function show(): View {
        $entries = GuestbookEntry::selectEntries();
        $parser = Parser::create();

        return view('guestbook')
            ->with('entries', $entries)
            ->with('parser', $parser);
    }

    /**
     * Creates a new guestbook entry
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function addEntry(Request $request): RedirectResponse {
        $this->validate($request, [
            'name' => 'required',
            'message' => 'required'
        ]);


        GuestbookEntry::insertGuestbookEntry($request);
        return back()->with('success', 'Entry submitted successfully!');
    }

    public function banIP(string $addr) {
        // TODO: Add banning system
        // $matching_bans = DB::select('SELECT reason FROM guestbook__bans WHERE ip_address = ?', array($request->ip()));
        // if (!empty($matching_bans)) {
        //     return view('errors.guestbook-ipban')->with('reason', $matching_bans[0]->reason);
        // }
    }
}

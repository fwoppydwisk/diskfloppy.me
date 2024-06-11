<?php

namespace App\Http\Controllers;

use App\Models\GuestbookEntry;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use UAParser\Parser;

class AdminGuestbookController extends Controller
{
    function getGuestbookUniqueAddr(): int {
        $uniqueIpsCount = DB::table('guestbook__entries')->distinct()->count('ip');
        return $uniqueIpsCount;
    }

    function getGuestbookEntriesCount(): int {
        $entryCount = DB::table('guestbook__entries')->count();
        return $entryCount;
    }
    public function show() : View {
        $guestbook_unique_addr = $this->getGuestbookUniqueAddr();
        $guestbook_entry_count = $this->getGuestbookEntriesCount();
        $entries = GuestbookEntry::selectEntries();
        $parser = Parser::create();

        return view('admin.guestbook', [
            'guestbook_unique_addr' => $guestbook_unique_addr,
            'guestbook_entry_count' => $guestbook_entry_count,
            'entries' => $entries,
            'parser' => $parser,
        ]);
    }
}

<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestbookEntry extends Model
{
    use HasFactory;
    protected $table = "guestbook__entries";
    protected $fillable = ['name', 'message'];

    /**
     * Creates a new guestbook entry.
     *
     * @param Request $request The HTTP POST request
     * @return void
     */
    public static function insertGuestbookEntry(Request $request) {
        $newEntry = new GuestbookEntry;
        $newEntry->name = htmlspecialchars($request->get('name'));
        $newEntry->message = htmlspecialchars($request->get('message'));
        $newEntry->ip = $request->ip();
        $newEntry->agent = $request->userAgent();
        $newEntry->admin = auth()->check();
        $newEntry->save();
    }

    public static function selectEntries() {
        $entries = GuestbookEntry::orderBy('created_at', 'desc')->get();
        return $entries;
    }

    public static function importGuestbookEntry(array $data) {
        foreach ($data as $entry) {
            $dt = new \DateTime('@' . $entry['timestamp']);
            $newEntry = new GuestbookEntry;
            $newEntry->name = $entry['name'];
            $newEntry->ip = $entry['ip_address'];
            $newEntry->agent = $entry['agent'];
            $newEntry->admin = $entry['site_owner'];
            $newEntry->message = $entry['message'];
            $newEntry->created_at = $dt;
            $newEntry->updated_at = $dt;
            $newEntry->save();
        }
    }
}

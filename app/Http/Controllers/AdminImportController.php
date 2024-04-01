<?php

namespace App\Http\Controllers;

use App\Models\BookmarkCategory;
use App\Models\BookmarkSite;
use App\Models\GuestbookEntry;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminImportController extends Controller
{
    public function show() : View {
        return view('admin.import');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'jsonFile' => 'required|mimes:json',
        ]);

        $file = $request->file('jsonFile');
        $jsonContent = file_get_contents($file->getRealPath());
        $data = json_decode($jsonContent, true);
        $tables = [];
        foreach($data as $item) {
            if ($item['type'] !== "table") continue;
            $tables[$item['name']] = [
                'data' => $item['data'],
                'count' => count($item['data'])
            ];

            if ($item['name'] === "guestbook__entries") {
                GuestbookEntry::importGuestbookEntry($item['data']);
            }
            $this->import($item['data'], $item['name']);
        }
        return view('admin.import-success', ['tables' => $tables]);
    }

    /**
     * Imports the given data to the specified table
     *
     * @param array $data The data to import
     * @param string $table_name The name of the table to import to
     * @return void
     * @throws Exception Invalid table specified, to be replaced with custom exception
     */
    public function import(array $data, string $table_name): void {
        switch ($table_name) {
            case 'guestbook__entries':
                GuestbookEntry::importGuestbookEntry($data);
                break;
            case 'bookmark__categories'  :
                BookmarkCategory::importBookmarkCategory($data);
                break;
            case 'bookmark__sites':
                BookmarkSite::importBookmark($data);
                break;
            case 'guestbook__bans':
                break;
            default:
                // TODO: Replace with custom exception
                throw new Exception("Invalid table specified ($table_name)");
        }
    }
}

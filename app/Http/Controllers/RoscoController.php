<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class RoscoController extends Controller {
    public function getImages(): array {
        $images = [];
        foreach (File::glob(public_path('images/rosco').'/*') as $path) {
            $image_data = [];
            try {
                $exif = exif_read_data($path);
            } catch (Exception $ex) {

            }
            $image_data["path"] = str_replace(public_path(), '', $path);
            if (isset($exif)) {
                if (isset($exif["ImageDescription"])) {
                    $image_data["description"] = $exif["ImageDescription"];
                }
                if (isset($exif["DateTime"])) {
                    $image_data["date"] = strtotime($exif["DateTime"]);
                }
            }
            array_push($images, $image_data);
        }

        usort($images, function ($a, $b) {
            $dateA = $a['date'] ?? PHP_INT_MIN;
            $dateB = $b['date'] ?? PHP_INT_MIN;
            return $dateB <=> $dateA;
        });

        return $images;
    }

    /**
     * Shows the page
     * @return View
     */
    public function show(): View {
        return view('rosco', [
            'images' => $this->getImages(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function set(Request $request)
    {
        $theme = strtolower($request->input('theme'));

        // optioneel: validatie
        $validThemes = ['basis wit', 'nacht zwart', 'moss groen', 'marine blauw', 'perzik roze'];
        if (!in_array($theme, $validThemes)) {
            abort(400, 'Ongeldig thema');
        }

        $theme_converted = str_replace(' ', '_', strtolower($theme));

        session(['theme' => $theme_converted]);
        cookie()->queue('theme', $theme_converted, 60 * 24 * 30); // 30 dagen

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function toggleTheme()
    {
        $user = Auth::user();

        $currentTheme = $user->getSetting('theme', 'light');
        $newTheme = $currentTheme === 'light' ? 'dark' : 'light';

        $user->setSetting('theme', $newTheme);

        return response()->json(['theme' => $newTheme], 200);
        // return redirect()->back();
    }

    public function toggleLanguage()
    {
        $user = Auth::user();

        $currentLang = $user->getSetting('language', 'es');
        $newLang = $currentLang === 'es' ? 'en' : 'es';

        $user->setSetting('language', $newLang);

        return response()->json(['language' => $newLang]);
    }
}

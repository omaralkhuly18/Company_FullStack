<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class TranslationController extends Controller
{
    public function indexArabic()
    {
        // Retrieve all translations in Arabic
        $translations = Lang::get('web_trans', [], 'ar');

        return view('admins.translations.index_ar', compact('translations'));
    }

    public function updateArabic(Request $request)
    {
        $translations = $request->input('translations');

        if (!is_array($translations)) {
            $translations = [];
        }


        // Save the translations to the file
        $this->saveTranslationsToFile($translations);

        return redirect()->route('dash.translation.arabic.index')->with('success', trans('web_trans.translation_update_success'));;
    }

    private function saveTranslationsToFile($translations)
    {
        // Prepare the PHP file content
        $content = "<?php\n\nreturn " . var_export($translations, true) . ";\n";

        // Save the content to the file
        File::put(resource_path('lang/ar/web_trans.php'), $content);
    }


    public function indexEnglish()
    {
        // Retrieve all translations in Arabic
        $translations = Lang::get('web_trans', [], 'en');

        return view('admins.translations.index_en', compact('translations'));
    }

    public function updateEnglish(Request $request)
    {
        $translations = $request->input('translations');

        if (!is_array($translations)) {
            $translations = [];
        }


        // Save the translations to the file
        $this->saveTranslationsToFileEnglish($translations);

        return redirect()->route('dash.translation.english.index')->with('success', trans('web_trans.translation_update_success'));;
    }

    private function saveTranslationsToFileEnglish($translations)
    {
        // Prepare the PHP file content
        $content = "<?php\n\nreturn " . var_export($translations, true) . ";\n";

        // Save the content to the file
        File::put(resource_path('lang/en/web_trans.php'), $content);
    }

}

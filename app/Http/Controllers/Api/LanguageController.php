<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CodingLanguage;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * プログラミング言語検索API
     *
     * @param Request $request
     *
     * @return array
     */
    public function get_languages(Request $request)
    {
        $language = $request->input('language');
        $languages = CodingLanguage::where('language', 'LIKE', '%'. $language .'%')->get();

        $response = [];
        for ($i=1; $i < count($languages); $i++) {
                $response[] = $languages[$i]->language;
        }

        return $response;
    }
}

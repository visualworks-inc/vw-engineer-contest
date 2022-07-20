<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ContestController extends Controller
{
    /**
     * コンテスト応募画面
     */
    public function index()
    {
        return view('contest');
    }

    /**
     * コンテスト応募確認画面
     *
     * @param Request $request
     */
    public function confirm(Request $request)
    {
        return view('confirm', [
            'name' => $request->name,
            'reason' => $request->reason,
            'language' => $request->language,
        ]);
    }

    /**
     * コンテスト応募登録
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $application = new Application;
        $application->name = $request->name;
        $application->reason = $request->reason;
        $application->language = $request->language;
        $application->save();

        return redirect('/contest/complete');
    }

    /**
     * コンテスト応募完了画面
     */
    public function complete()
    {
        return view('complete');
    }
}

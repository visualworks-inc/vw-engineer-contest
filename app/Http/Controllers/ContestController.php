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
        $validatedData = $request->validate([
            'name' => ['required'],
            'reason' => ['required'],
            'language' => ['required'],
        ]);
        $is_used_name = Application::is_used_name($validatedData['name']);
        if ($is_used_name) {
            return redirect('/contest')
                ->withInput()
                ->with('message', '既に名前が使用されています。');
        }
        return view('confirm', [
            'name' => $validatedData['name'],
            'reason' => $validatedData['reason'],
            'language' => $validatedData['language'],
        ]);
    }

    /**
     * コンテスト応募登録
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'reason' => ['required'],
            'language' => ['required'],
        ]);
        $application = new Application;
        $application->name = $request->name;
        $application->reason = $request->reason;
        $application->language = $request->language;
        $application->save();
        // Application::create($validatedData);

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

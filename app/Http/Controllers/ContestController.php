<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContestPostRequest;
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
    public function confirm(ContestPostRequest $request)
    {
        $replace_name = Application::convertToFullWidthDash($request->name);
        $is_used_name = Application::is_used_name($replace_name);
        if ($is_used_name) {
            return redirect('/contest')
                ->withInput()
                ->with('message', '既に名前が使用されています。');
        }
        return view('confirm', [
            'name' => $replace_name,
            'reason' => $request->reason,
            'language' => $request->language,
        ]);
    }

    /**
     * コンテスト応募登録
     *
     * @param Request $request
     */
    public function store(ContestPostRequest $request)
    {
        $request_name = Application::convertToFullWidthDash($request->name);
        $application = new Application;
        $application->name = $request_name;
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

<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 02.10.2017
 * Time: 10:32
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function edit()
    {
        $settings = Settings::find(1);

        return view('admin.settings.edit', [
            'settings' => $settings
        ]);
    }

    public function update(Request $request, Settings $settings)
    {
        $settings->amocrm_script = $request->amocrm_script;
        $settings->save();

        return redirect()->route('settings.edit')
            ->with('success', 'Settings updated successfully');
    }
}
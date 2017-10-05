<?php

namespace App\Http\Controllers;

use App\Http\Requests\BriefRequest;
use App\Models\Brief;
use App\Models\BriefAbout;
use App\Models\BriefConnectAbout;
use App\Models\BriefConnectService;
use App\Models\BriefService;
use App\Models\File;
use App\Models\Page;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class BriefController extends Controller
{
    public function create()
    {
        $briefservices = BriefService::all();
        $briefabouts = BriefAbout::all();
        $page = Page::find(8);

        return view('client.brief', compact('briefservices', 'briefabouts', 'brief', 'page'));
    }

    public function store(BriefRequest $request)
    {
        if (Input::get('group2') == 'quickly') {
            $request->merge(['time' => Carbon::now()]);
            $request->time = Carbon::now();
        } elseif (Input::get('group2') == 'when') {
            $time = new DateTime($request->time);
            $request->merge(['time' => $time]);
            $request->time = date_format($time,'Y-m-d');

        }
//        dd($request->time);
        $brief = Brief::create($request->all());

        if (Input::has(['money_min', 'money_max'])) {
            $brief->money = json_encode(['min' => Input::get('money_min'), 'max' => Input::get('money_max')]);
            $brief->save();
        } elseif (Input::has('money_concretely')) {
            $brief->money = json_encode(['concretely' => Input::get('money_concretely')]);
            $brief->save();
        }

        $id = $brief->id;

        //todo pluck()?
        if (isset($request['briefservices'])) {
            $briefservices = static::map(BriefService::all()->toArray(), 'id', 'name');
            foreach ($request['briefservices'] as $briefservice) {
                $briefserviceid = array_search($briefservice, $briefservices);
                if ($briefserviceid) {
                    BriefConnectService::create([
                        'brief_id' => $id,
                        'brief_service_id' => $briefserviceid,
                    ]);
                }
            }
        }

        if (isset($request['briefabouts'])) {
            $briefabouts = static::map(BriefAbout::all()->toArray(), 'id', 'name');
            foreach ($request['briefabouts'] as $briefabout) {
                $briefaboutid = array_search($briefabout, $briefabouts);
                if ($briefaboutid) {
                    BriefConnectAbout::create([
                        'brief_id' => $id,
                        'brief_about_id' => $briefaboutid,
                    ]);
                }
            }
        }

        if ($request->hasFile('files')) {
            foreach ($request->file() as $file) {
                foreach ($file as $f) {
                    $name = md5($f) . '.' . $f->getClientOriginalExtension();
                    $f->move(public_path('files/brief/' . $id . '/'), $name);
                    File::create([
                        'link' => $name,
                        'brief_id' => $id
                    ]);
                }
            }
        }
        return redirect('/');
    }

    public function index(Request $request)
    {
        $briefs = Brief::with('files')->orderBy('id', 'DESC')->paginate(10);
        return view('admin.brief.index', compact('briefs'));
    }

    public function destroy($id)
    {
        Brief::find($id)->delete();
        return redirect()->route('admin.brief.index')
            ->with('success', 'Brief deleted successfully');
    }

    //todo pluck()?
    private static function map(array $array, $from, $to)
    {
        $new_array = [];
        foreach ($array as $item) {
            if (isset($item[$from]) && isset($item[$to])) {
                $new_array[$item[$from]] = $item[$to];
            }
        }
        return $new_array;
    }
}

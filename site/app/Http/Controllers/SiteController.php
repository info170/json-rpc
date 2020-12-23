<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Services\JsonRpcClient;
use App\Services\JsonRpcResponse;
use Log;

class SiteController extends Controller
{
    protected $client;

    public function __construct(JsonRpcClient $client)
    {
        $this->client = $client;
    }

    public function getHistory(Request $request)
    {
        $data = $this->client->send('weather.getHistory', ['lastDays' => 30]);

        return view('welcome', ['lastDays' => $data['result']]);
    }

    public function getByDate(Request $request)
    {
    	request()->validate([
    		'date' => ['required','date']
    	]);

        $data = $this->client->send('weather.getByDate', ['date' => $request->get('date')]);

        if (empty($data['result'])) {

			return Redirect::to('/')->withInput()->withErrors(['date' => 'No data for this day']);
        }

        return view('welcome', ['temp' => $data['result'][0]['temp']]);
    }

}

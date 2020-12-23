<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\History;
use Carbon\Carbon;
use Log;

class HistoryController extends Controller
{
    public function getByDate(array $params)
    {
        return DB::table('history')->where('date_at', $params['date'])->get();
    }

    public function getHistory(array $params)
    {
    	$fromDate = Carbon::now()->subDays($params['lastDays']);

        return DB::table('history')->where('date_at', '>=', $fromDate)->get();
    }


}
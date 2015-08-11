<?php namespace App\Http\Controllers;

use Log;
use DB;

class RedirectController extends Controller {

    public function __construct()
    {
    }

    public function redirect($linkId)
    {
        Log::info('This is some useful information.');
        $link_data_results = DB::select('select * from shortlinks where shortlink = ?', array($linkId));

        if(sizeof($link_data_results) > 1)
        {
            echo "There are more than one entries for this link!";
            return;
        } else if(sizeof($link_data_results) == 0)
        {
            echo "Sorry, this link no longer exists: " . sizeof($link_data_results);
            return;
        }

        $link_data = $link_data_results[0];
        $destination_url = $link_data->destinationUrl;

        if(!starts_with(strtolower($destination_url), "http"))
        {
            $destination_url = "http://" . $destination_url;
        }

        return view('redirect', ["destination_url" => $destination_url]);
    }
}

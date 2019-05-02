<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use App\Models\Story;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    public function index()
    {
        $analytics = Analytics::fetchMostVisitedPages(Period::days(7));
        $result = [];
        foreach ($analytics as $item) {
            $url = $item["url"];
            if (preg_match('#^/blog/#', $url) === 1) {
                $temp = preg_replace('#^/blog/#', "", $url);
                $story = Story::where('slug', $temp)->first();
                if ($story != NULL)
                    var_dump($story);
                    // array_push($result, $story);
            }
        }
        return $analytics;
        return view('analytics.index');
    }
}

<?php

namespace App\Http\Controllers;

require '..\vendor\autoload.php';
use Carbon\Carbon;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function getQuotes() 
    {
        $quotes = Quote::all();
        if(!$quotes)
        {
            return response()->json(['message' => 'Database error.']);
        }
        $response = [
            'quotes' => $quotes
        ];
        return response()->json($response, 200);
    }

    public function getQuotd()
    {
        $current_date = Carbon::now();
        $current_date = (int) $current_date->format("d");
        $quotd = Quote::all();

        $response = [
            'quotd' => $quotd->skip($current_date - 1)->first()
        ];
        return response()->json($response, 200);
    }

    public function getRandom()
    {
        $random = Quote::inRandomOrder()->first();

        $response = [
            'random' => $random
        ];
        return response()->json($response, 200);
    }

    public function setQuotes(array $quotes)
    {
        $quotes = Quote::get();
        $indexer = 0;
        foreach($quotes as $quote) {
            $quote->quote = ($quotes[$indexer]->quote);
            $quote->author = ($quotes[$indexer]->author);
            $quote->category = ($quotes[$indexer]->category);
            $quote->save();
        }

        return response()->json(['quote' => $quote], 200);
    }

    public function searchQuotes($word) {
        $quotes = Quote::where('quote', 'LIKE', '%'.$word.'%')->get();

        $response = [
            'quotes' => $quotes
        ];
        return response()->json($response, 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;


class SearchController extends Controller
{
    public function search(Request $request)
    {
    
    // var_dump($request);

    // $data = $request->all();

    $data = json_decode(file_get_contents("php://input"), true);

    var_dump($data);

    
    // $query = $request->input('query');

    // $client = ClientBuilder::create()->build();
    // $params = [
    //     'index' => config('app.elasticsearch_index'),
    //     'body' => [
    //         'query' => [
    //             'match' => [
    //                 'title' => $query
    //             ]
    //         ]
    //     ]
    // ];

    // $response = $client->search($params);
    // $hits = $response['hits']['hits'];

    // return view('search', compact('hits'));
    }
}

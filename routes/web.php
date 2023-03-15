<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
  // $client = Elasticsearch\ClientBuilder::create()->build();
  // var_dump($client);
  // var_dump($request->getContent());
  echo "hi";
});

Route::get('/enter/{age}/{name}', function ($age, $name) {
  $client = ClientBuilder::create()->build();
  $params = array();
  $params['body'] = array(
    'name' => $name,
    'age' => floatval($age)
  );
  $params['index'] = 'test_index';
  $result = $client->index($params);
  var_dump($result);
});


Route::get('find/{age}', function ($age) {
  $client = Elasticsearch\ClientBuilder::create()->build();
  $params['index'] = 'test_index';
  $params['body']['query']['match']['age'] = $age;
  $result = $client->search($params);
  return ($result);
});

// Route::get('search/{age}', function ($age) {
//   $client = Elasticsearch\ClientBuilder::create()->build();
//   $params['index'] = 'test_index';
//   $params['body']['query']['match']['age'] = $age;
//   $result = $client->search($params);
//   return ($result);
// });


// Route::get('create_index/{index}',function($index){
//   $client = Elasticsearch\ClientBuilder::create()->build()
//   $result = $client->
// });

// Route::get('/search', [Controllers\SearchController::class, 'search']);

Route::post('/test', function(Request $request){
  $data = $request->json()->all(); 
  var_dump($data);
});




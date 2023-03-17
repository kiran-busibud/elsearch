<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Carbon;
use App\Jobs\ElasticsearchIndexJob;

class IndexController extends Controller
{
    public function index(Request $request){
        $params = request()->all();
        $ticket = Ticket::create([
            'user' => 'John Doe',
            'email' => 'john@example.com',
            'date' => '2023-03-03'
        ]);
        $ticketEs = new Ticket();
        $ticketEs->user = 'John Doe1';
        $ticketEs->email = 'john@example.com1';
        $ticketEs->date = Carbon::now();
        $ticketEs->searchable();
        ElasticsearchIndexJob::dispatch($$ticketEs)->onQueue('elasticsearch');
    }
}

<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\AddClientRequest;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $clients = Client::orderBy('last_name', 'asc')->paginate(25);
        if ($request && $request->has('name')) {
            $name = $request->input('name');
            $clients = Client::where('first_name', 'like', "%{$name}%")
                                ->orWhere('last_name', 'like', "%{$name}%")
                                ->orderBy('last_name', 'asc')
                                ->paginate(25);
        }

        return view('clients', ['clients' => $clients]);
    }

    public function show(Client $client)
    {
        return view('client', compact('client'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(AddClientRequest $request)
    {
        // dd($request->all());
        Client::create($request->all());

        return redirect('clients')->with('status', 'Client added successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Session;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all the accounts in it from the database
        $accounts = Account::all();

        // return a view and pass in the above variable
        return view('pages.dashboard')->withAccounts($accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $validatedData = $request->validate([
        'goal_title' => 'required|max:255',
        'target_amount' => 'required',
        'target_date' => 'required',
    ]);

        // store in the database
        $account = new Account;
        $account->goal_title = $request->goal_title;
        $account->description = $request->description;
        $account->target_amount = $request->target_amount;
        $account->target_date = $request->target_date;

        $account->save();

        Session::flash('success','Goal created successfully');

        // redirect to another page(show)
        return redirect()->route('posts.show', $account->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Account::find($id);

        return view('pages.goals')->with('goal', $account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

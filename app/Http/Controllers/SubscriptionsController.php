<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubscriptionPost;

class SubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        //$subscriptions = Subscription::get();
        //$subscriptions = Subscription::orderBy('id','desc')->get();
        $subscriptions = Subscription::paginate(5);
        //dd($subscriptions);
        return view('subscriptions.list', ['subscriptions' => $subscriptions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("subscriptions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriptionPost $request)
    {
        //
        //echo "Token: ".$request->input('token')."<br> Es activo?: ".$request->input('isActive')."<br> Tipo de subscripción: )".$request->input('subscriptionType');

        // dd($request);
        //echo "Token: ".$request->token;
        //echo "Token: ".request("token");
        // $request->validate([
        //     'token' => 'required|max:25',
        //     'subscriptionType' => 'required',
        // ]);
        // dd($request->all());
        // echo "Token: " . $request->input('token');
        //$request->validated();
        Subscription::create($request->validated());
        //dd($request->all());

        return back()->with('status', 'Subscripción creada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscription = Subscription::findOrFail($id);

        return view('subscriptions.get', ['subscription' => $subscription]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //$subscription = Subscription::findOrFail($id);

        return view('subscriptions.update', ["subscription" => $subscription]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSubscriptionPost $request, Subscription $subscription)
    {
        $subscription->update($request->validated());
        //dd($request->all());
        return back()->with('status', 'Subscripción ' . $subscription->id . ' actualizada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return back()->with('status', 'Subscripción ' . $subscription->id . ' eliminada con éxito!');
    }
}

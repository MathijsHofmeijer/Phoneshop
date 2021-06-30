<?php

namespace App\Http\Controllers;

use App\Extrainfo;
use App\Telefoon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class TelefoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefoons = DB::Table('telefoons')
            ->join('extrainfos','telefoons.id',"=", 'extrainfos.Extra_id')
            ->select('telefoons.*','extrainfos.kleur','extrainfos.besturingssysteem')
            ->get();

        return view('telefoons.index', compact('telefoons'));

    }
    public function test(){
        $telefoons = Telefoon::all();

        echo $telefoons;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telefoons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telefoon = new telefoon([

            'model' => $request->model,

            'fabrikant'=> $request->fabrikant,

            'geheugen'=> $request->geheugen,

            'prijs'=> $request->prijs

        ]);

        $telefoon->save();

        return redirect('/telefoons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telefoon = Telefoon::find($id);

        return view('telefoons.edit', compact('telefoon'));
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
        $telefoon = Telefoon::find($id);

        $telefoon->model = $request->model;

        $telefoon->fabrikant = $request->fabrikant;

        $telefoon->geheugen = $request->geheugen;

        $telefoon->prijs = $request->prijs;

        $telefoon->save();

        return redirect('/telefoons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telefoonn = telefoon::find($id);

        $telefoonn->delete();

        return redirect('/telefoons');
    }
}

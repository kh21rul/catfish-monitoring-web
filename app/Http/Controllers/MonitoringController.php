<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Http\Requests\StoreMonitoringRequest;
use App\Http\Requests\UpdateMonitoringRequest;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMonitoringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Monitoring $monitoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monitoring $monitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMonitoringRequest $request, Monitoring $monitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monitoring $monitoring)
    {
        //
    }

    public function bacasuhu()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacasuhu', ['monitoring' => $monitoring]);
    }

    public function bacakekeruhan()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacakekeruhan', ['monitoring' => $monitoring]);
    }

    public function bacaph()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacaph', ['monitoring' => $monitoring]);
    }

    public function bacajarak()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacajarak', ['monitoring' => $monitoring]);
    }

    public function bacapompamasuk()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacapompamasuk', ['monitoring' => $monitoring]);
    }

    public function bacapompakeluar()
    {
        $monitoring = Monitoring::select('*')->get();
        return view('bacapompakeluar', ['monitoring' => $monitoring]);
    }

    public function simpan () {
        $newTemperature = request('temperature');

        Monitoring::where ('id', 1)->update ([
            'temperature' => request ('temperature'),
            'turbidity' => request ('turbidity'),
            'ph' => request ('ph'),
            'jarak' => request ('jarak'),
            'pompa_masuk' => request ('pompa_masuk'),
            'pompa_keluar' => request ('pompa_keluar'),
        ]);  
    }
}

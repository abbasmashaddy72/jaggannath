<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageListRequest;
use App\Http\Requests\UpdatePackageListRequest;
use App\Models\PackageList;

class PackageListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function show(PackageList $packageList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageList $packageList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageListRequest  $request
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageListRequest $request, PackageList $packageList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageList $packageList)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCompanyRequest;
use App\Http\Requests\UpdateUserCompanyRequest;
use App\Models\UserCompany;

class UserCompanyController extends Controller
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
     * @param  \App\Http\Requests\StoreUserCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCompany  $userCompany
     * @return \Illuminate\Http\Response
     */
    public function show(UserCompany $userCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCompany  $userCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCompany $userCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCompanyRequest  $request
     * @param  \App\Models\UserCompany  $userCompany
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCompanyRequest $request, UserCompany $userCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCompany  $userCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCompany $userCompany)
    {
        //
    }
}

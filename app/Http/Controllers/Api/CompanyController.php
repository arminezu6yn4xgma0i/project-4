<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return CompanyResource::collection(Company::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyRequest $companyRequest
     * @return CompanyResource
     */
    public function store(CompanyRequest $companyRequest): CompanyResource
    {
        $company = Company::create($companyRequest->validated());

        return new CompanyResource($company);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Company  $company
     * @return CompanyController
     */
    public function update(Request $request, Company $company): CompanyController
    {
        $company->update($request->validate());

        return new CompanyController($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company): \Illuminate\Http\Response
    {
        $company->delete();

        return response()->noContent();
    }
}

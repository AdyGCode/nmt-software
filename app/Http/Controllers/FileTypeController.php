<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileTypeRequest;
use App\Http\Requests\UpdateFileTypeRequest;
use App\Models\FileType;

class FileTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreFileTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileType  $fileType
     * @return \Illuminate\Http\Response
     */
    public function show(FileType $fileType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileType  $fileType
     * @return \Illuminate\Http\Response
     */
    public function edit(FileType $fileType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileTypeRequest  $request
     * @param  \App\Models\FileType  $fileType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileTypeRequest $request, FileType $fileType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileType  $fileType
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileType $fileType)
    {
        //
    }
}

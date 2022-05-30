<?php
/**
 * Filename:    index.blade.php
 * Project:     software-hub
 * Location:    dist\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     20/03/22
 * Description:
 *     Add description here
 */

?>
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Software') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-slate-50  border border-slate-800 overflow-hidden shadow-slate-300 shadow-lg rounded-lg">
                <div class="card">
                    <h3 class="card-header p-4 text-2xl bg-slate-900 text-slate-50">
                        Add Software
                    </h3>

                    <div class="card-body m-4">
                        <form action="">
                        <div class="mt-4 flex">
                            <label for="Title" class="flex-none w-32">Name</label>
                            <input type="text" name="title" id="Title" class="flex-1">
                        </div>

                        <div class="mt-4 flex">
                            <label for="Version" class="flex-none w-32">Version</label>
                            <input type="text" name="version" id="Version" class="flex-1">
                        </div>


                        <div class="mt-4 flex">
                            <label for="Category" class="flex-none w-32">Category</label>
                            <select id="Category" name="category" class="flex-1">
                                <option value="" selected disabled>Select the Category</option>
                            @foreach($tags as $category)
                                    <option value="{{ $category->id }}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mt-4 flex">
                            <label for="Size" class="flex-none w-32">Size</label>
                            <input type="text" name="size" id="Size" class="flex-1">
                        </div>

                        <div class="mt-4 flex">
                            <label for="FileType" class="flex-none w-32">File Type</label>
                            <select id="FileType" name="fileType" class="flex-1">
                                <option value="" selected disabled>Select the File Type</option>
                                @foreach($fileTypes as $fileType)
                                    <option value="{{ $fileType->id }}">
                                        {{$fileType->description}} [{{ $fileType->file_extension }}]
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4 flex">
                            <label for="" class="flex-none w-32"> </label>

                            <button class="m-4 p-2 px-4 rounded animated transition-all duration-300
                                           bg-emerald-800 text-emerald-100
                                           hover:bg-emerald-500 hover:text-white
                                           border border-emerald-900"
                                    type="submit">
                                <i class="fa fa-save"></i>
                                <span>Save</span>
                            </button>
                            <button class="m-4 p-2 px-4 rounded animated transition-all duration-300
                                           bg-orange-800 text-orange-100
                                           hover:bg-orange-500 hover:text-white
                                           border border-orange-900"
                                    type="reset">
                                <i class="fa fa-eraser"></i>
                                <span>Clear</span>
                            </button>
                            <a href="{{ route('software.index') }}"
                               class="m-4 p-2 px-4 rounded animated transition-all duration-300
                                           bg-indigo-800 text-indigo-100
                                           hover:bg-indigo-500 hover:text-white
                                           border border-indigo-900"
                                    >
                                <i class="fa fa-long-arrow-left"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>


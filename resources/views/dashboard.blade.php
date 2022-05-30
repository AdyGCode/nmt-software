<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="flex m-6 border-b border-gray-200 pb-12 gap-4">

                    <div class="flex-1 bg-white rounded-md overflow-hidden border border-blue-500 border-1 text-center">
                        <header class="bg-blue-500 text-white p-2">
                            <h4 class="text-md font-semibold ">Users</h4>
                        </header>
                        <div class="text-8xl m-8 justify-center">
                            {{ $users }}
                        </div>
                        <footer class="p-2 content-centre bg-blue-800 text-white ">
                            <a href="#" class="text-sm">Details</a>
                        </footer>
                    </div>

                    <div class="flex-1 bg-white rounded-md overflow-hidden border border-emerald-500 border-1 text-center">
                        <header class="bg-emerald-500 text-white p-2">
                            <h4 class="text-md font-semibold">Software</h4>
                        </header>
                        <div class="text-8xl p-8">
                            {{ $software }}
                        </div>
                        <footer class="p-2 content-centre bg-emerald-800 text-white ">
                            <a href="#" class="text-sm">Details</a>
                        </footer>
                    </div>

                    <div class="flex-1 bg-white rounded-md overflow-hidden border border-amber-500 border-1 text-center">
                        <header class="bg-amber-500 text-white p-2">
                            <h4 class="text-md font-semibold ">Categories</h4>
                        </header>
                        <div class="text-8xl m-8">
                            {{ $categories }}
                        </div>
                        <footer class="p-2 content-centre bg-amber-800 text-white ">
                            <a href="#" class="text-sm">Details</a>
                        </footer>
                    </div>

                    <div class="flex-1 bg-white rounded-md overflow-hidden border border-rose-500 border-1 text-center">
                        <header class="bg-rose-500 text-white p-2">
                            <h4 class="text-md font-semibold ">File Types</h4>
                        </header>
                        <div class="text-8xl m-8">
                            {{ $fileTypes }}
                        </div>
                        <footer class="p-2 content-centre bg-rose-800 text-white ">
                            <a href="#" class="text-sm">Details</a>
                        </footer>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

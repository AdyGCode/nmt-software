<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="m-6 border-b border-gray-200 pb-12 gap-4">

                    <table class="table w-full border-stone-800 border-1 rounded-md overflow-clip">
                        <thead class="bg-stone-700 text-white">
                        <tr>
                            <th class="text-left">
                                #
                            </th>
                            <th class="text-left">
                                Tag name
                            </th>
                            <th class="text-left">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class=" border border-stone-200">
                        @php($i=1)
                        @foreach($tags as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $item->name }}</td>
                                <td>View Edit Delete</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5" class="pt-4">
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

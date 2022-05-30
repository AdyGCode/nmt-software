<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Software') }}
        </h2>
        <a href="{{ url('/software/create')}}">Add</a>
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
                                Filename
                            </th>
                            <th class="text-right pr-2">
                                Filesize
                            </th>
                            <th class="text-left">
                                Categories
                            </th>
                            <th class="text-left">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class=" border border-stone-200">
                        @php($i=1)
                        @foreach($software as $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $item->filename }}</td>
                                <td class="text-right pr-2">{{ \App\Http\Helpers\HumanReadable::toShort($item->file_size) }}</td>
                                <td>
                                    @empty($item->tags())
                                        -
                                    @else
                                        @foreach($item->tags as $category)
                                            <span class="rounded bg-stone-800 text-stone-100 text-xs px-1 mr-1">
                                                {{ $category->name }}
                                            </span>
                                        @endforeach
                                    @endempty
                                </td>
                                <td>View Edit Delete</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5" class="pt-4">
                                {{ $software->links() }}
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <header class="flex justify-between">
                    <div>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Categories Information') }}
                        </h2>

                        <p class="mt-1 mb-4 text-sm text-gray-600">
                            {{ __("This is the list of all the categories.") }}
                        </p>
                    </div>

                    <div>
                        <a href="{{ route('categories.create') }}" class="rounded-md bg-indigo-500 px-2.5 py-1.5 text-sm font-semibold text-white border border-indigo-500 hover:border-indigo-600 shadow-xs hover:bg-indigo-600">Create Category</a>
                    </div>
                </header>

                <div class="relative overflow-x-auto">
                    <table id="posts-table" class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($categories))
                            @foreach($categories as $category)
                                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $category->id }}
                                    </th>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $category->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        @if(!empty($category->image))
                                            <img src="{{ asset('images/categories/thumb/'.$category->image) }}" alt="{{ $category->name }}" class="h-16 w-auto rounded-md">
                                        @else
                                            <span class="text-gray-500 text-sm">No image</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $category->description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($category->status == '1')
                                            <span class="bg-green-200 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">Active</span>
                                        @else
                                            <span class="bg-red-200 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('categories.show', $category->id) }}" class="font-medium text-gray-500 hover:underline">View</a>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="font-medium text-indigo-500 hover:underline ml-2">Edit</a>
                                        <form class="inline" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="font-medium text-red-500 hover:underline ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>

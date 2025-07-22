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
                            {{ __('Category Information') }}
                        </h2>

                        <p class="mt-1 mb-4 text-sm text-gray-600">
                            {{ __("All the details about the category.") }}
                        </p>
                    </div>

                    <div>
                        <a href="{{ route('categories.index') }}" class="rounded-md bg-indigo-500 px-2.5 py-1.5 text-sm font-semibold text-white border border-indigo-500 hover:border-indigo-600 shadow-xs hover:bg-indigo-600">Back</a>
                    </div>
                </header>

                <div class="relative overflow-x-auto">
                    <div class="mb-6">
                        <h2 class="font-bold mb-2">ID</h2>
                        <p>{{ $category->id }}</p>
                        <hr class="my-2">
                    </div>
                    <div class="mb-6">
                        <h2 class="font-bold mb-2">Name</h2>
                        <p>{{ $category->name }}</p>
                        <hr class="my-2">
                    </div>
                    <div class="mb-6">
                        <h2 class="font-bold mb-2">Description</h2>
                        <p>{{ $category->description }}</p>
                        <hr class="my-2">
                    </div>
                    <div class="mb-6">
                        <h2 class="font-bold mb-2">Image</h2>
                        @if(!empty($category->image))
                            <a href="{{ asset('images/categories/'.$category->image) }}" data-lightbox="example-set">
                                <img src="{{ asset('images/categories/'.$category->image) }}" alt="{{ $category->name }}" class="w-64 h-auto mt-1 rounded-md">
                            </a>
                        @else
                            <span class="text-gray-500 text-sm">No image</span>
                        @endif
                        <hr class="my-2">
                    </div>
                    <div class="mb-6">
                        <h2 class="font-bold mb-2">Status</h2>
                        @if($category->status == '1')
                            <span class="bg-green-200 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">Active</span>
                        @else
                            <span class="bg-red-200 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-md">Inactive</span>
                        @endif
                        <hr class="my-2">
                    </div>
                    <div class="mb-6">
                        <h2 class="font-bold mb-2">Created At</h2>
                        <p>{{ $category->created_at->format('Y-m-d') }} <span class="ml-1 text-xs font-bold">({{ $category->created_at->diffForHumans(['parts' => 2, 'join' => ', ','short' => true]) }})</span></p>
                        <hr class="my-2">
                    </div>
                    <div class="mb-6">
                        <h2 class="font-bold mb-2">Updated At</h2>
                        <p>{{ $category->updated_at->format('Y-m-d') }} <span class="ml-1 text-xs font-bold">({{ $category->created_at->diffForHumans(['parts' => 2, 'join' => ', ','short' => true]) }})</span></p>
                        <hr class="my-2">
                    </div>

                    <div class="mb-6">
                        <a href="{{ route('categories.edit', $category->id) }}" class="rounded-md bg-indigo-500 px-2.5 py-1.5 text-sm font-semibold text-white border border-indigo-500 hover:border-indigo-600 shadow-xs hover:bg-indigo-600">Edit</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-app-layout>

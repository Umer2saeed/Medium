<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Post Information') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Create your post.") }}
                    </p>
                </header>

                <form method="post" action="{{ route('posts.store') }}" class="mt-6 space-y-6">
                    @csrf
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug')" disabled :value="old('slug')" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-input-label for="category_id" :value="__('Category')" />
                            <select id="category_id" name="category_id" class="mt-1 py-2.5 px-4 pe-9 block w-full border-gray-300 rounded-md text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="">Select Category</option>
                                @if(!empty($categories))
                                    @foreach($categories as $category)
                                        <option value="{{ old('category_id', $category->id) }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif

                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
                        </div>
                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            <x-file-input type="file" name="image" id="image" />
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <div>
                            <x-input-label for="content" :value="__('Content')" />
                            <x-textarea id="content" name="content" type="text" class="mt-1 block w-full" :value="old('content')" autofocus autocomplete="content" />
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>



</x-app-layout>

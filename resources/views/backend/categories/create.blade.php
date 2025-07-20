<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Category Information') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Create your category.") }}
                    </p>
                </header>

                <form method="post" action="{{ route('categories.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div>
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug')" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <select id="status" name="status" class="mt-1 py-2.5 px-4 pe-9 block w-full border-gray-300 rounded-md text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            <x-file-input type="file" name="image" id="image" class="mt-1 block w-full"/>
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1">
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea name="description" class ="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" cols="30" rows="4">{{ old('description') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            $(document).ready(function() {
                $('#name').on('change', function() {
                    var name = $(this).val();
                    var slug = name.toLowerCase() // Convert to lowercase
                        .replace(/[^a-z0-9\s-]/g, '') // Remove non-alphanumeric characters except spaces and hyphens
                        .replace(/\s+/g, '-') // Replace spaces with hyphens
                        .replace(/-+/g, '-') // Replace multiple hyphens with a single hyphen
                        .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
                    $('#slug').val(slug);
                });
            });
        </script>
    @endsection
</x-app-layout>



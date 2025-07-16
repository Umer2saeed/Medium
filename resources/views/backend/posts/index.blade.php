<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
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
                        {{ __("This is the list of all the posts.") }}
                    </p>
                </header>


            </div>
        </div>
    </div>



</x-app-layout>

<x-app-layout>
    <div class="max-w-[1400px] mx-auto">
        <div class="flex flex-row my-4 xl:mx-[20px] lg:mx-[10px] md:mx-[100px]">

            {{-- Left Panel --}}
            <div class="w-[1200px] py-4 px-20 max-lg:w-full max-lg:px-4">
                {{-- Header --}}
                <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-150">
                    <ul class="flex flex-wrap -mb-px">

                        <li class="me-2">
                            <a href="#" class="inline-block p-4 text-black border-b-2 border-black rounded-t-lg active">For
                                you</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-900 hover:border-gray-300">Following</a>
                        </li>
                        <li class="me-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-900 hover:border-gray-300">Featured</a>
                        </li>

                    </ul>
                </div>

                {{-- Post Cards --}}

                @forelse ($posts as $post)
                    <x-post-item :post="$post" />
                @empty
                    <div class="text-center">
                        <h2 class="text-2xl py-6 text-gray-400">No posts available</h2>
                    </div>

                @endforelse
                {{-- Pagination --}}
                {{ $posts->onEachSide(1)->links() }}
            </div>


            {{-- Right Panel --}}
            <div class="w-[450px] py-4 px-2 max-lg:hidden">

            {{-- Staff Picks--}}
                <div id="staff_picks" class="mb-4">
                    <h2 class="font-semibold mb-6">Staff Picks</h2>
                    <div class="staff_pick_items">
                        <x-staff-picks />
                        <x-staff-picks />
                        <x-staff-picks />
                        <div class="full-list pb-6">
                            <a href="#">
                                <span class=" text-sm text-gray-500 hover:underline">See the full list</span>
                            </a>
                        </div>
                    </div>
                </div>

            {{-- Categories --}}
                <div id="categories" class="mb-8">
                    <h2 class="font-semibold mb-6">Categories</h2>
                    <div class="flex flex-row gap-3 flex-wrap">
                        <x-category-tags />
                    </div>
                </div>

            {{-- Who to Follow --}}
                <div id="who_to_follow" class="mb-6">
                    <h2 class="font-semibold mb-6">Who to follow</h2>
                    <div class="flex flex-row gap-3 flex-wrap">
                        <x-follow-card />
                        <x-follow-card />
                        <x-follow-card />
                        <div class="full-list pb-6">
                            <a href="#">
                                <span class=" text-sm text-gray-500 hover:underline">See more suggestions</span>
                            </a>
                        </div>
                    </div>
                </div>







            </div>
        </div>



    </div>










</x-app-layout>

<x-app-layout>
{{--    <div class="max-w-[1400px] mx-auto">--}}

{{--        <div class="flex flex-row my-4 xl:mx-[20px] lg:mx-[10px] md:mx-[100px]">--}}
{{--            --}}{{-- Left Panel --}}
{{--            <main class="w-[1200px] py-4 px-20 max-lg:w-full max-lg:px-4">--}}
{{--                --}}{{-- Header --}}
{{--                <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-150">--}}
{{--                    <ul class="flex flex-wrap -mb-px">--}}

{{--                        <li class="me-2">--}}
{{--                            <a href="#" class="inline-block p-4 text-black border-b-2 border-black rounded-t-lg active">For--}}
{{--                                you</a>--}}
{{--                        </li>--}}
{{--                        <li class="me-2">--}}
{{--                            <a href="#"--}}
{{--                               class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-900 hover:border-gray-300">Following</a>--}}
{{--                        </li>--}}
{{--                        <li class="me-2">--}}
{{--                            <a href="#"--}}
{{--                               class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-900 hover:border-gray-300">Featured</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </div>--}}

{{--                --}}{{-- Post Cards --}}

{{--                @forelse ($posts as $post)--}}
{{--                    <x-post-item :post="$post" />--}}
{{--                @empty--}}
{{--                    <div class="text-center">--}}
{{--                        <h2 class="text-2xl py-6 text-gray-400">No posts available</h2>--}}
{{--                    </div>--}}

{{--                @endforelse--}}
{{--                --}}{{-- Pagination --}}
{{--                {{ $posts->onEachSide(1)->links() }}--}}
{{--            </main>--}}

{{--            --}}{{-- Right Panel --}}
{{--            <aside class="relative w-[450px] py-4 px-2 max-lg:hidden">--}}
{{--                <div class="sticky top-[-274px]">--}}
{{--                    --}}{{-- Staff Picks--}}
{{--                    <div id="staff_picks" class="mb-4">--}}
{{--                        <h2 class="font-semibold mb-6">Staff Picks</h2>--}}
{{--                        <div class="staff_pick_items">--}}
{{--                            <x-staff-picks />--}}
{{--                            <x-staff-picks />--}}
{{--                            <x-staff-picks />--}}
{{--                            <div class="full-list pb-6">--}}
{{--                                <a href="#">--}}
{{--                                    <span class=" text-sm text-gray-500 hover:underline">See the full list</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    --}}{{-- Categories --}}
{{--                    <div id="categories" class="mb-8">--}}
{{--                        <h2 class="font-semibold mb-6">Categories</h2>--}}
{{--                        <div class="flex flex-row gap-3 flex-wrap">--}}
{{--                            <x-category-tags />--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    --}}{{-- Who to Follow --}}
{{--                    <div id="who_to_follow" class="mb-6">--}}
{{--                        <h2 class="font-semibold mb-6">Who to follow</h2>--}}
{{--                        <div class="flex flex-row gap-3 flex-wrap">--}}
{{--                            <x-follow-card />--}}
{{--                            <x-follow-card />--}}
{{--                            <x-follow-card />--}}
{{--                            <div class="full-list pb-6">--}}
{{--                                <a href="#">--}}
{{--                                    <span class=" text-sm text-gray-500 hover:underline">See more suggestions</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    --}}{{-- Reading List --}}
{{--                    <div id="reading_list" class="mb-6">--}}
{{--                        <h2 class="font-semibold mb-4">Reading List</h2>--}}
{{--                        <div class="flex flex-row gap-3 flex-wrap">--}}
{{--                            <p class="text-sm text-gray-500">Click the--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 25 25" class="text-black inline-block"><path fill="currentColor" d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .805.396L12.5 17l5.695 4.396A.5.5 0 0 0 19 21v-8.5a.5.5 0 0 0-1 0v7.485l-5.195-4.012a.5.5 0 0 0-.61 0L7 19.985z"></path></svg>--}}
{{--                                on any story to easily add it to your reading list or a custom list that you can share.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    --}}{{-- Footer --}}
{{--                    <div id="footer" class="mb-4">--}}
{{--                        <div class="flex flex-row gap-1.5 flex-wrap">--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Help</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Status</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>About</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Careers</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Press</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Blog</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Privacy</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Rules</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Terms</p></a></div>--}}
{{--                            <div class="text-[12px] text-gray-500 hover:text-gray-700"><a href="#"><p>Text to speech</p></a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </aside>--}}

{{--        </div>--}}
{{--    </div>--}}

</x-app-layout>




<!-- Container: full-height flex layout -->
<div class="flex flex-col md:flex-row h-screen overflow-hidden">
    <!-- Main content: grows to fill space, scrolls vertically -->
    <main class="flex-1 overflow-y-auto p-6 bg-white">
        <!-- Example posts -->
        <article class="mb-8">Post 1 content...</article>
        <article class="mb-8">Post 2 content...</article>
        <!-- ...more posts -->
    </main>
    <!-- Sidebar: fixed width, limited height, scrolls if content is long -->
    <aside class="w-full md:w-64 md:h-screen overflow-y-auto p-6 bg-gray-100">
        <div class="mb-4">Sidebar Item 1</div>
        <div class="mb-4">Sidebar Item 2</div>
        <!-- ...custom sidebar content -->
    </aside>
</div>

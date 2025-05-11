@foreach ($categories as $category)
    <div class="category mb-3.5">
        <a href="#">
            <span
                class="bg-gray-100 text-[14px] text-gray-800 font-light px-4 py-2.5 rounded-full dark:bg-[rgb(242,242,242)] dark:text-gray-900">{{ $category->name }}</span>
        </a>
    </div>
@endforeach
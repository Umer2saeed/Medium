@props(['disabled' => false])
<input @disabled($disabled) {{ $attributes->merge(['class' => 'mt-1 block w-full border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm rounded-md text-sm file:border-0 file:me-4 file:py-2.5 file:px-4 dark:file:bg-neutral-200 file:text-neutral-900']) }} >

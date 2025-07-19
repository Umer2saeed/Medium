@props(['disabled' => false])
<input @disabled($disabled) {{ $attributes->merge(['class' => 'mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 shadow-sm']) }} >

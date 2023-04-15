<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold flex justify-between text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $product->name }}
            @auth
                @if (Auth::user()->role->role == 'admin')
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a class="text-lg bg-yellow-800 text-white hover:bg-yellow-500/90 hover:text-gray-700 px-2 py-1 rounded-md"
                        href="{{ route('product.edit',['product' => $product->id]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </div>
                @endif
            @endauth
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Product detail page") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
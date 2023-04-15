<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-between font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight font-[Poppins]">
            {{ __('Products') }}
            @auth
                @if (Auth::user()->role->role == 'admin')
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <a
                            class="text-lg bg-yellow-800 text-white hover:bg-yellow-500/90 hover:text-gray-700 px-2 py-1 rounded-md"
                            href="{{ route('product.create') }}">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                @endif
            @endauth
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-4 gap-3">
            @foreach ($products as $product)
            <div>
                <x-product-item :product="$product"></x-product-item>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
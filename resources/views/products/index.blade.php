<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-between font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight font-[Poppins]">
            {{ __('Products') }}
            <div class="flex sm:justify-around sm:items-center sm:ml-6">
            @auth
                @if (Auth::user()->role->role == 'admin')
                <a
                    class="mx-1 text-lg bg-yellow-800 text-white hover:bg-yellow-500/90 hover:text-gray-700 px-2 py-1 rounded-md"
                    href="{{ route('product.create') }}">
                    <i class="fa-solid fa-plus"></i>
                </a>
                @endif
            @endauth
                <button class="mx-1 text-lg bg-yellow-800 text-white hover:bg-yellow-500/90 hover:text-gray-700 px-2 py-1 rounded-md">
                    <i class="fa-solid fa-filter"></i>
                </button>
                <a
                    class="mx-1 text-lg bg-yellow-800 text-white hover:bg-yellow-500/90 hover:text-gray-700 px-2 py-1 rounded-md"
                    href="{{ route('cart.index') }}">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl sm:mx-auto sm:px-6 lg:px-8 grid grid-cols-2 sm:grid-cols-4 sm:gap-3">
            @unless(count($products) > 0)
                No Products available
            @else
                @foreach ($products as $product)
                <div>
                    <x-product-item :product="$product"></x-product-item>
                </div>
                @endforeach
            @endunless
        </div>
    </div>
</x-app-layout>
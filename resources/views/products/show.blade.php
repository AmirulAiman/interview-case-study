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
                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-3 px-5 py-2">
                    <div class="px-5 py-4">
                        <img class="" src="{{ asset('images/'.$product->img_name) }}" alt="{{ $product->name }}">
                        <span class="bg-blue-200 text-blue-800 rounded-md px-3 py-2">#{{ $product->brand->brand }}</span>
                        <span class="bg-blue-200 text-blue-800 rounded-md px-3 py-2">#{{ $product->category->category }}</span>
                    </div>
                    <div class="w-3/5 mx-auto">
                        <div class="mb-6">
                            <h2 class="font-semibold text-2xl">Description</h2>
                            <hr>
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="mb-6">
                            <h2 class="font-semibold text-2xl">Price</h2>
                            <hr>
                            <p class="text-lg"></p>RM {{  $product->base_price }}
                        </div>
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="flex-grow flex justify-center bg-yellow-800 hover:bg-yellow-500/90 hover:text-gray-800 px-6 py-2 rounded-md text-white font-medium tracking-wider transition"
                                name="product_id" value="{{ $product->id }}">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
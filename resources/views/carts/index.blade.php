<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @unless (count($cart))
                        {{ __("No item added to cart!") }}
                        <h1>Take a look in the <a class="font-bold text-yellow-800" href="{{ route("product.index") }}">{{ __("Product") }}</a> page for the list of products</h1>
                    @else
                    <form action="{{ route('cart.checkout') }}" method="POST">
                        @csrf
                        <table class="w-full">
                            <thead>
                                <td>#</td>
                                <td>Product Name</td>
                                <td>Amount</td>
                                <td>Action</td>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="{{ route("product.show",["product" => $product->slug]) }}" class="flex px-3 py-2 overflow-auto">
                                                <img class="w-1/5 h-1/5 object-cover rounded-md" src="{{ asset('images/'.$product->img_name) }}" alt="{{ $product->name }}">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <td>{{ $cart[$product->id]['quantity'] }}</td>
                                        <td>Action</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="w-full flex justify-end space-x-1">
                            <x-primary-button 
                                class="bg-yellow-800 hover:bg-yellow-500/90 hover:text-gray-800 px-6 py-2 rounded-md text-white font-medium tracking-wider transition"
                            >
                                {{ __("Checkout") }}
                            </x-primary-button>
                            <a 
                                class="bg-gray-800 hover:bg-gray-500/90 hover:text-white px-6 py-2 rounded-md text-gray-200 font-medium tracking-wider transition"
                                href="{{ route("cart.clear") }}"
                            >
                            Clear Cart
                            </a>
                        </div>
                    </form>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
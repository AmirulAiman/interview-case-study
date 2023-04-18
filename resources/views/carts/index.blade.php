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
                        <table class="w-full font-[Poppins] mb-6 shadow-lg rounded-md border-b-2">
                            <thead class="bg-gray-50 border-b-2 border-gray-500">
                                <th class="text-md text-left px-6 py-3 w-1/12">#</th>
                                <th class="text-md px-6 py-3 w-3/4">Product Name</th>
                                <th class="text-md px-6 py-3 w-1/4">Amount</th>
                                <th class="text-md px-6 py-3 w-3/4">Action</th>
                            </thead>
                            <tbody class="">
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="text-left px-3 py-1">1</td>
                                        <td class="text-left px-2 py-1">
                                            <a href="{{ route("product.show",["product" => $product->slug]) }}" class="flex px-3 py-2 overflow-auto">
                                                <img class="w-1/5 h-1/5 object-cover rounded-md" src="{{ asset('images/'.$product->img_name) }}" alt="{{ $product->name }}">
                                                {{ $product->name }}
                                            </a>
                                        </td>
                                        <td class="text-center px-2 py-1">{{ $cart[$product->id]['quantity'] }}</td>
                                        <td class="text-center px-2 py-1">Action</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="w-full flex justify-end space-x-1">
                            <h1 class="text-2xl font-[Poppins] text-gray-800 mx-2">Total: <span>RM {{ $total ?? "0.00" }}</span></h1>
                            <form action="{{ route('cart.checkout') }}" method="POST">
                                @csrf
                                <x-primary-button 
                                    class="bg-yellow-800 hover:bg-yellow-500/90 hover:text-gray-800 px-6 py-2 rounded-md text-white font-medium tracking-wider transition"
                                >
                                    {{ __("Checkout") }}
                                </x-primary-button>
                            </form>
                            <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <x-primary-button 
                                    class="bg-gray-800 hover:bg-gray-500/90 hover:text-gray-800 px-6 py-2 rounded-md text-white font-medium tracking-wider transition"
                                >
                                    {{ __("Clear Cart") }}
                                </x-primary-button>
                            </form>
                        </div>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
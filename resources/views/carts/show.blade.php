<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cart History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @unless (count($carts) > 0)
                        {{ __("No carts exist in history!") }}
                        <h1>Take a look in the <a class="font-bold text-yellow-800" href="{{ route("product.index") }}">{{ __("Product") }}</a>
                            page for the list of products</h1>
                    @else
                        <h1 class="text-center font-[Poppins] font-bold text-lg underline">Currently Pending Item to Receive</h1>
                        <table class="w-full font-[Poppins] mb-6 shadow-lg rounded-md border-b-2">
                            <thead class="bg-gray-50 border-b-2 border-gray-500">
                                <tr>
                                    <th class="text-md text-left px-6 py-3 w-1/12">#</th>
                                    <th class="text-md px-6 py-3 w-1/12">Cart</th>
                                    <th class="text-md px-6 py-3 w-3/4">Items</th>
                                    <th class="text-md px-6 py-3 w-1/6">Item Price</th>
                                    <th class="text-md px-6 py-3">Items Status</th>
                                    <th class="text-md px-6 py-3 w-1/3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    @foreach ($cart->items as $item)
                                        @if ($loop->index == 0)
                                            <tr class="hover:bg-gray-300 hover:text-gray-600">
                                                <td class="text-left px-3 py-1">{{ $loop->index+1 }}</td>
                                                <td rowspan="1">{{ date('d/m/Y h:m:s',strtotime($cart->created_at)) }}</td>
                                                <td class="text-left px-2 py-1">
                                                    <a href="{{ route('product.show',['product' => $item->product_id]) }}">
                                                        {{ $item->product->name }}
                                                    </a>
                                                </td>
                                                <td class="text-center px-2 py-1">RM {{ $item->product->base_price }}</td>
                                                <td class="text-center px-2 py-1">
                                                    @switch($item->status)
                                                        @case("received")
                                                            <span class="text-md font-semibold uppercase rounded-md px-2 py-1 bg-green-200 text-green-800 cursor-pointer">
                                                                {{ $item->status }}
                                                            </span>
                                                            @break
                                                        @default
                                                            <span class="text-md font-semibold uppercase rounded-md px-2 py-1 bg-yellow-200 text-yellow-800 cursor-pointer">
                                                                {{ $item->status }}
                                                            </span>
                                                    @endswitch
                                                </td>
                                                <td class="w-1/3 px-2 py-1">
                                                    @if ($item->status != "received")
                                                        <button class="bg-yellow-800 text-white hover:bg-yellow-500/90  px-3 py-1 rounded-md">Received?</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @else
                                            <tr class="hover:bg-gray-300 hover:text-gray-600">
                                                <td class="text-left px-3 py-1" colspan="2">{{ $loop->index+1 }}</td>
                                                <td class="text-left px-2 py-1">
                                                    <a href="{{ route('product.show',['product' => $item->product_id]) }}">
                                                        {{ $item->product->name }}
                                                    </a>
                                                </td>
                                                <td class="text-center px-2 py-1">RM {{ $item->product->base_price }}</td>
                                                <td class="text-center px-2 py-1">
                                                    @switch($item->status)
                                                    @case("received")
                                                    <span class="text-md font-semibold uppercase rounded-md px-2 py-1 bg-green-200 text-green-800 cursor-pointer">
                                                        {{ $item->status }}
                                                    </span>
                                                    @break
                                                    @default
                                                    <span class="text-md font-semibold uppercase rounded-md px-2 py-1 bg-yellow-200 text-yellow-800 cursor-pointer">
                                                        {{ $item->status }}
                                                    </span>
                                                    @endswitch
                                                </td>
                                                <td class="w-1/3 px-2 py-1">
                                                    @if ($item->status != "received")
                                                    <button class="bg-yellow-800 text-white hover:bg-yellow-500/90  px-3 py-1 rounded-md">Received?</button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
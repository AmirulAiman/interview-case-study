<div class="bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden mb-6 hover:scale-110 transition-all duration-300">
    <a class="cursor-pointer" href="{{ route('product.show',['product' => $product->slug]) }}">
        <img class="w-full h-full object-cover" src="{{ asset('images/'.$product->img_name) }}"
            alt="{{ $product->name }}">
    </a>

    <div class="p-5 flex-col gap-3">
        {{-- Category --}}
        <div class="flex items-center gap-2">
            <span
                class="px-3 py-1 rounded-full text-xs bg-gray-100 font-[Poppins]">{{ $product->category->category }}</span>
        </div>

        {{-- Product Name --}}
        <h2 class="font-semibold text-2xl overflow-ellipsis overflow-hidden whitespace-nowrap"
            title="{{ $product->name }}">{{ $product->name }}</h2>

        {{-- Price --}}
        <div>
            <span class="text-xl font-bold">RM {{ $product->base_price }}</span>
            {{-- <div class="flex items-center gap-2 mt-1">
                <span class="text-sm line-through opacity-50">
                    RM 8.30
                </span>
                <span class="bg-green-400 px-1.5 py-0.5 rounded-md text-xs text-white">
                    save 20%
                </span>
            </div> --}}
        </div>

        {{-- Rating --}}
        <span class="flex items-center mt-1 text-yellow-400">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <span class="text-2xl ml-2 text-gray-500">
                150 Reviews
            </span>
        </span>

        {{-- Action Button --}}
        <div class="mt-5 flex gap-2">
            <form action="#" method="POST">
                @csrf
                <button type="submit"
                    class="bg-yellow-800 hover:bg-yellow-500/90 hover:text-gray-800 px-6 py-2 rounded-md text-white font-medium tracking-wider transition"
                    name="addToCart" value="{{ $product->id }}">
                    Add to Cart
                </button>
            </form>
            {{-- <button
                class="flex-grow flex justify-center items-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md">
                <i class="fa-solid fa-heart opacity-50"></i>
            </button> --}}
            <a href="{{ route('product.show', ['product' => $product->slug]) }}"
                class="flex-grow flex justify-center items-center bg-gray-300/60 hover:bg-gray-300/80 transition rounded-md">
                <i class="fa-sharp fa-regular fa-eye opacity-50"></i>
            </a>
        </div>
    </div>
</div>
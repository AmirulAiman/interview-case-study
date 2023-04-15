<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form
                        action="{{ request()->routeIs('product.edit') ? route('product.update',['product' => $product->id]) : route('product.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(request()->routeIs('product.edit'))
                        @method('PUT')
                        @endif

                        {{-- Name --}}
                        <div class="flex w-3/5 mx-auto mb-6">
                            <div class="inline-flex sm:w-full">
                                <label class="text-md font-semibold text-gray-900 text-left mx-2 px-5 font-[Poppins]" for="name" >
                                    Product Name<span class="text-red-500">*</span>
                                </label>
                                <input
                                    class="w-full mx-2 rounded-md @error('name') border-red-500 @enderror"
                                    type="text"
                                    name="name"
                                    placeholder="Product name..."
                                    value="{{ @old('name', $product->name) }}"
                                >
                            </div>
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="flex w-3/5 mx-auto mb-6">
                            <div class="inline-flex sm:w-full">
                                <label class="font-semibold text-gray-900 mx-2 px-5 font-[Poppins]" for="description">Description</label>
                                <textarea
                                    class="rounded-md w-full"
                                    name="description"
                                    id="description"
                                    placeholder="Product description..."
                                >{{ @old('description', $product->description) }}</textarea>
                            </div>
                            @error('description')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Img Name --}}
                        <div class="block w-3/5 mx-auto mb-6">
                            <div class="inline-flex sm:w-full">
                                <label class="font-semibold text-gray-900 font-[Poppins]" for="img_name">Product Image</label>
                                <div class="flex justify-center items-center">
                                    <input
                                        class="font-semibold font-[Poppins] text-gray-900"
                                        type="file"
                                        name="img_name"
                                        id="img_name"
                                    >
                                </div>
                            </div>
                            @error('img_name')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Price --}}
                        <div class="block w-3/5 mx-auto mb-6">
                            <div class="inline-flex sm:w-full">
                                <label for="price" class="font-[Poppins] font-semibold w-1/5">Price(RM)<span class="text-red-500">*</span></label>
                                <input type="number" class="px-2 py-1 rounded-md w-full" name="price" id="price" placeholder="Price per unit..."
                                    pattern="[0-9]+([,\.][0-9]+)?" step="0.1" value="{{ @old('price', $product->base_price) }}" />
                            </div>
                            @error('price')
                                <span class="px-2 py-1 text-red-500 font-semibold">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Brands --}}
                        <div class="block w-3/5 mx-auto mb-6">
                            <div class="inline-flex sm:w-full">
                                <label for="brand" class="font-[Poppins] font-semibold w-1/5">Brand<span class="text-red-500">*</span></label>
                                <select
                                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                    name="brand">
                                    <option value="">-- Please select product brand --</option>
                                    @foreach ($brands as $brand)
                                    <option
                                        @if(request()->routeIs('product.edit'))
                                            @selected(@old('brand',$product->brand_id == $brand->id))
                                        @endif
                                        value="{{ $brand->id }}"
                                    >{{ $brand->brand }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            @error('brand')
                            <span class="px-2 py-1 text-red-500 font-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Category --}}
                        <div class="block w-3/5 mx-auto mb-6">
                            <div class="inline-flex sm:w-full">
                                <label for="category" class="font-[Poppins] font-semibold w-1/5">Category<span class="text-red-500">*</span></label>
                                <select
                                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                                    name="category">
                                    <option value="">-- Please select product category --</option>
                                    @foreach ($categories as $category)
                                    <option
                                        @if(request()->routeIs('product.edit'))
                                            @selected(@old('category',$product->category_id == $category->id))
                                        @endif
                                        value="{{ $category->id }}"
                                    >{{ $category->category }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                            @error('category')
                            <span class="px-2 py-1 text-red-500 font-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex justify-center w-2/5 mx-auto">
                            <x-primary-button>{{ request()->routeIs('product.create') ? __('Create') : __('Update') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
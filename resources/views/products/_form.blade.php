@csrf

<div class="w-full space-y-0.5">
    <label for="name" class="text-xs font-medium text-gray-500"> Name </label>
    <span>@error('name')<span class="text-red-500">{{ $message }}</span>@enderror</span>
    <input name="name" required type="text" placeholder="Enter the product name" value="{{ old('name', $product->name) }}"
        class="block w-full rounded-md border-gray-200 text-sm transition focus:border-blue-600 focus:ring-blue-600 
      disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75" />
</div>

<div class="w-full space-y-0.5">
    <label for="description" class="text-xs font-medium text-gray-500"> Description </label>
    <span>@error('description')<span class="text-red-500">{{ $message }}</span>@enderror</span>
    <textarea name="description" rows="5" class="rounded border-gray-200 w-full mb-4"> {{ old('description', $product->description) }}</textarea>
</div>

<div class="w-full space-y-0.5">
    <label for="image" class="text-xs font-medium text-gray-500"> Image URL </label>
    <span>@error('image')<span class="text-red-500">{{ $message }}</span>@enderror</span>
    <input name="image" required type="text" placeholder="Insert the link of the product image" value="{{ old('image', $product->image) }}"
    class="block w-full rounded-md border-gray-200 text-sm transition focus:border-blue-600 focus:ring-blue-600 
        disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75" />
</div>

<div class="w-full space-y-0.5">
    <label for="price" class="text-xs font-medium text-gray-500"> Price </label>
    <span>@error('price')<span class="text-red-500">{{ $message }}</span>@enderror</span>
        <input name="price" required type="text" placeholder="Enter the price of the product" value="{{ old('price', $product->price) }}"     
        class="block w-full rounded-md border-gray-200 text-sm transition focus:border-blue-600 focus:ring-blue-600 
            disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75" />
</div>

<div class="w-full space-y-0.5">
    <label for="quantity" class="text-xs font-medium text-gray-500"> Quantity </label>
    <span>@error('quantity')<span class="text-red-500">{{ $message }}</span>@enderror</span>
        <input name="quantity" required type="text" placeholder="Enter the quantity of the product" value="{{ old('quantity', $product->quantity) }}"     
        class="block w-full rounded-md border-gray-200 text-sm transition focus:border-blue-600 focus:ring-blue-600 
            disabled:cursor-not-allowed disabled:bg-gray-200 disabled:opacity-75" />
</div>
<br>

<div class="flex justify-between items-center">
    <a href="{{ route('products.index')}}" class="text-indigo-600">
        Back
    </a>

    <input type="submit" value="Send" class="rounded-md border-2 border-blue-600 text-blue-600 px-4 py-2 
    focus:ring-blue-600 focus:outline-none focus:border-blue-600">
</div>
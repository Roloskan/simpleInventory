<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Products') }}
            
            <a href="{{ route('products.create') }}"> 
                <button
                    class="z-10 block p-4 text-green-700 transition-all bg-green-100 border-2 border-white rounded-full active:bg-green-50 hover:scale-110 focus:outline-none focus:ring"
                    type="button">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </button>
            </a>
        </h2>
    </x-slot>
@if ($products->count() > 0)
    
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="overflow-hidden overflow-x-auto border border-gray-100 rounded">
                <table class="min-w-full text-sm divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Name</th>
                            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Description</th>
                            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Price</th>
                            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Quantity</th>
                            <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        @foreach ($products as $product)
                        <tr>
                            <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $product->name }}</td>
                            <td class="px-4 py-2 text-gray-700 ">{{ $product->description }}</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $product->price }}</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $product->quantity }}</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">
                                <div class="flex items-center -space-x-4 hover:space-x-1">
                                    <a href="{{ route('products.edit', $product->id) }}">
                                        <button  
                                            class="z-20 block p-4 text-blue-700 transition-all bg-blue-100 border-2 border-white rounded-full active:bg-blue-50 hover:scale-110 focus:outline-none focus:ring"
                                            type="button">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                    </a>

                                    <form  action="{{ route('products.destroy', $product->id) }}" method="POST" >
                                        @csrf 
                                        @method('DELETE')

                                        <button
                                            onclick="return confirm('Are you sure?')"
                                            class="z-30 block p-4 text-red-700 transition-all bg-red-100 border-2 border-white rounded-full hover:scale-110 focus:outline-none focus:ring active:bg-red-50"
                                            type="submit">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@else
<Alert type="warning">Lorem ipsum dolor sit</Alert>
@endif


</x-app-layout>
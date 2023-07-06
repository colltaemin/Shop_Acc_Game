<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg  m-5">
        <div class="flex justify-center flex-1 lg:mr-32 pb-5">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model.debouce.500ms="search"
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="search" placeholder="Search for projects" aria-label="Search" />
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

            <thead class="text-xs text-gray-700 uppercase bg-gray-300  dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Current Account
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sold Account
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $product->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $product->current_account }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->sold_account }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $product->created_at }}
                        </td>
                        <td class="px-6 py-4 ">
                            <x-danger-button wire:click="confirmProductDeletion({{ $product->id }})"
                                wire:loading.attr="disabled">
                                Delete
                            </x-danger-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination m-5">
        {{ $products->links('pagination::tailwind') }}
    </div>
    <!-- Delete Product Confirmation Modal -->
    <x-dialog-modal wire:model="confirmingProductDeletion">
        <x-slot name="title">
            {{ __('Delete Product') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you want to delete your product?') }}
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('confirmingProductDeletion', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-danger-button class="ml-3" wire:click="deleteProduct({{ $confirmingProductDeletion }})"
                wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>

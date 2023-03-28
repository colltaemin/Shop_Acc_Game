<div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-2 m-5">
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
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        The remaining amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date created
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->email }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->money }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->created_at }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button wire:click="confirmUserAddAmount({{ $user->id }})"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Add More
                                Amount</button>
                        </td>
                    </tr>
                @endforeach


            </tbody>

        </table>

    </div>
    <div class="pagination m-5">
        {{ $users->links('pagination::tailwind') }}
    </div>

    <x-dialog-modal wire:model="confirmingUserAddAmount">
        <x-slot name="title">
            {{ __('Add Amount For User') }}
        </x-slot>

        <x-slot name="content">
            <x-label for="email" value="{{ __('Amount') }}" />
            <x-input id="email" type="number" class="mt-1 block w-full" wire:model.lazy="user.money" />
            <x-input-error for="money" class="mt-2" />
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('confirmingUserAddAmount', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-secondary-button class="ml-3" wire:click="saveUser({{ $confirmingUserAddAmount }})"
                wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>



</div>

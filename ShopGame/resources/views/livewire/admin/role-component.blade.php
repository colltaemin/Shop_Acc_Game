<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg  m-5">
        <div class="flex text-right pb-5 pr-2 pt-1">
            <div class="flex justify-center flex-1 lg:mr-32">
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
            <a href="{{ route('admin.roles.create') }}">
                <button type="submit"
                    class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Add Role
                </button>
            </a>


        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

            <thead class="text-xs text-gray-700 uppercase bg-gray-300  dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Role Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Permission Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-right">
                        <span class="">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $role->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $role->description }}
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($role->permissions as $permission)
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{ $permission->name }}
                                </span>
                            @endforeach
                        <td class="px-4 py-4 flex justify-end">
                            <a href="{{ route('admin.roles.edit', $role->id) }}">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    Edit
                                </button>
                            </a>
                            <a href="{{ route('admin.roles.delete', $role->id) }}">
                                <button
                                    class="delete_form bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                    Delete
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="pagination m-5">
        {{ $roles->links('pagination::tailwind') }}
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script></script>

</div>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">

    <div class="flex">
        <div class="flex-none">
            <x-partials.sidebar>
            </x-partials.sidebar>
        </div>
        <div class="flex-initial w-full ">
            <x-partials.navbar>
            </x-partials.navbar>
            {{-- <livewire:admin.role-component /> --}}
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="pt-20">
                    <div class="container mx-auto pl-3">
                        <div class="grid gap-3 grid-cols-6">
                            <div class="grid">
                                <input required type="text" name="name"
                                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Vui lòng nhập tên role">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>


                            <input required type="text" name="description"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Vui lòng nhập mô tả chi tiết">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                        </div>
                        <div class="pt-5">
                            <h3>
                                Vui lòng chọn quyền cho role
                            </h3>
                        </div>
                        <div class="grid gap-3 grid-cols-6 pt-5">
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" name="my_checkbox[]" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xem users</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="2" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sửa users
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="3" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xóa users
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="4" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xem products
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="5" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sửa products
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="6" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xóa roducts
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="7" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xem accounts
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="8" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sửa accounts
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="9" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xóa accounts
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="10" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xem roles
                                    checkbox</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="11" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sửa roles
                                </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="12" name="my_checkbox[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xóa roles
                                </label>
                            </div>


                        </div>

                        <div class="flex justify-center">
                            <button class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
                                type="submit">
                                Add
                            </button>
                        </div>

                    </div>

                </div>
            </form>
        </div>

    </div>

    @livewireScripts

</body>

</html>

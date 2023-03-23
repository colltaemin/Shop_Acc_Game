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
        <script src="{{ asset('js/app.js')}}" defer></script>
       
       

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
                <form action="{{route('admin.users.update', $user->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="pt-20">
                        <div class="container mx-auto pl-3">
                            <div class="grid gap-3 grid-cols-6">
                                <div class="grid">
                                  <input required type="number" name="money" class="px-2 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Vui lòng nhập số tiền cần thêm">
                                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                      <path fill-rule="evenodd" d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z" clip-rule="evenodd" />
                                    </svg>
                                  </div>
                                </div>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                      <path fill-rule="evenodd" d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z" clip-rule="evenodd" />
                                    </svg>
                                  </div>
                                  <button type="submit" class="px-2 py-1 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none bg-gray-100 hover:bg-red-500 text-red-600 hover:text-blue-600">
                                      Add
                                  </button>
                                  <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                      <path fill-rule="evenodd" d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z" clip-rule="evenodd" />
                                    </svg>
                                  </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
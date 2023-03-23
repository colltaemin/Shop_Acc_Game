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
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-10 m-5">
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
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                        <a href="{{route('admin.users.edit', $user->id )}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Add More Amount</a>
                                    </td>
                                </tr>
                                
                            @endforeach
                            
                            
                        </tbody>
                        
                    </table>
                    
                </div>
                <div class="pagination m-5">
                    {{ $users->links('pagination::tailwind') }}
                </div>
            </div>
           
        </div>
       
           
         
        
           
            
        @livewireScripts
 
    </body>
</html>
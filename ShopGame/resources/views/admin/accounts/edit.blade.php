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
            <form action="{{ route('accounts.update', ['id' => $account->id]) }} " method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="pt-20">
                    <div class="container mx-auto pl-3">
                        <div class="grid gap-3 grid-cols-6">
                            <div class="grid">
                                <input value="{{ $account->user_name }}" required type="text" name="user_name"
                                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Vui lòng nhập user name">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>


                            <input value="{{ $account->password }}" required type="text" name="password"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Vui lòng nhập password">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>


                            <input value="{{ $account->detail }}" required type="text" name="detail"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Vui lòng nhập thông tin acc">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <input value="{{ $account->level }}" required type="text" name="level"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Vui lòng nhập level">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <select required name="sever"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="{{ $account->sever }}">{{ $account->sever }}</option>
                                <option value="">Chọn Sever</option>
                                <option value="Madara">Madara</option>
                                <option value="Senju Hashirama">Senju Hashirama</option>
                                <option value="Habichi">Habichi</option>
                                <option value="Kha Cô Tếch">Kha Cô Tếch</option>
                                <option value="Làng sương mù">Làng sương mù</option>
                                <option value="Làng cát">Làng cát</option>
                                <option value="Làng lá">Làng lá</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <select required name="rank"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="{{ $account->rank }}">Rank {{ $account->rank }}</option>
                                <option value="">Chọn Rank</option>

                                <option value="1">Rank 1</option>
                                <option value="2">Rank 2</option>
                                <option value="3">Rank 3</option>
                                <option value="4">Rank 4</option>
                                <option value="5">Rank 5</option>
                                <option value="6">Rank 6</option>
                                <option value="7">Rank 7</option>
                                <option value="8">Rank 8</option>
                                <option value="9">Rank 9</option>

                            </select>

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>


                            <label class="pt-3" for="">Please choose photo for acc: </label>
                            <input value="{{ $account->image }}" required type="file" name="image[]"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Vui lòng chọn ảnh" multiple>
                        </div>


                    </div>
                    <div class="container mx-auto pt-5 pb-5 pl-3">
                        <div class="grid gap-3 grid-cols-6">

                            <select required name="class"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="{{ $account->class }}">{{ $account->class }}</option>
                                <option value="">Lớp</option>
                                <option value="Thổ">Thổ</option>
                                <option value="Hỏa">Hỏa</option>
                                <option value="Dao găm">Dao găm</option>
                                <option value="Thủy">Thủy</option>
                                <option value="lôi">Lôi</option>

                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <select required name="status"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="{{ $account->status }}">{{ $account->status }}</option>
                                <option value="">Tình trạng nick</option>
                                <option value="Đăng kí thật">Đăng kí thật</option>
                                <option value="Đăng kí ảo">Đăng kí ảo</option>


                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <select required name="product_id"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="{{ $account->product_id }}">{{ $account->product_id }}</option>
                                <option value="">Loại game</option>
                                <option value="1">Làng lá</option>
                                <option value="2">Ninja Origin</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <input value="{{ $account->weapon }}" required type="number" name="weapon"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Vui lòng nhập cấp của vũ khí">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <input value="{{ $account->price }}" required type="number" name="price"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Vui lòng nhập giá">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <button type="submit"
                                class="px-2 py-1 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none bg-gray-100 hover:bg-red-500 text-red-600 hover:text-blue-600">
                                Edit
                            </button>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M14.707 13.293a1 1 0 01-1.414 1.414l-3.5-3.5a1 1 0 010-1.414l3.5-3.5a1 1 0 011.414 1.414L11.414 9.5l3.293 3.293z"
                                        clip-rule="evenodd" />
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

<x-base-layout>

</x-base-layout>

<div class="container mx-auto pl-28 pb-10">
    <h1 class="text-2xl">#411</h1>
    <br>
    <h1 class="text-2xl text-red-500">{{ $category_detail->product->name }}</h1>
    <div class="grid grid-cols-4">

        <h1 class="text-2xl text-red-500">Sever: {{ $category_detail->sever }}</h1>
        <h1 class="text-2xl text-red-500">Level:{{ $category_detail->level }} </h1>
        <h1 class="text-2xl text-red-500"> Giá: {{ $category_detail->price }}</h1>

    </div>
    <div class="grid grid-cols-4">
        <h1 class="text-2xl text-red-500">Rank:{{ $category_detail->rank }} </h1>
        <h1 class="text-2xl text-red-500">Vũ khí: {{ $category_detail->weapon }}</h1>
        <h1 class="text-2xl text-red-500">Đăng kí: {{ $category_detail->status }} </h1>

        <div class="">
            <a href="">
                <button
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Mua ngay
                </button>
            </a>
            <a href="">
                <button
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Nạp tiền
                </button>
            </a>
        </div>
    </div>
    <br>
    <hr>
    <br>



</div>
@foreach ($category_detail->images as $image)
    <div class="grid justify-items-center gap-10">
        <img class="bg-center  h-110 w-130 p-2" src="{{ $image->image_path }}" alt="">

    </div>
@endforeach

<br>
<hr>
<br>
<div class="container mx-auto">
    <h1 class="text-2xl text-red-500">Tài khoản tương tự</h1>
    <br>
    <hr>
    <div class="antialiased">
        <div class="container mx-auto">
            <div class=" grid grid-cols-4  space-y-1 px-2 pt-2 pb-3 sm:px-3 pl-10">
                <div class="flex flex-col md:flex-row md:transform md:scale-75 lg:scale-100 pl-10">
                    <div
                        class=" border-2 border-indigo-600 border rounded-lg md:rounded-r-none text-center p-5 mx-auto md:mx-0 my-2 md:my-6 bg-gray-100 font-medium z-10 shadow-lg">
                        <div class=" bg-indigo-300 ">
                            <img class="object-cover h-40 w-80" src="images/lang-la-phieu-luu-ky-04_RLLH.jpg"
                                alt="">
                        </div>
                        <div class="text-sm my-3 text-">Sever: </div>
                        <hr>
                        <div class="text-sm my-3">Vũ khí: </div>
                        <hr>
                        <div class="text-sm my-3">Rank: </div>
                        <hr>
                        <div class="text-sm my-3">Giá: </div>
                        <hr>
                        <div class="text-sm my-3">Thông tin thêm: </div>
                        <hr>
                        <a href="{{ route('products.show') }}">
                            <div
                                class="bg-gradient-base border border-blue-600 hover:bg-white text-red-600 hover:text-blue-600 font-bold uppercase text-xs mt-5 py-2 px-4 rounded cursor-pointer">
                                Chi tiết</div>
                        </a>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>

<x-partials.footer>

</x-partials.footer>

<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')"></div>

    <div class="z-10">
        <h1 class="text-4xl font-bold uppercase text-white md:text-4xl">
            Ejraie <span class="text-black">إجرائي</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4 md:text-4xl lg:text-6xl">
            جد اجرائك الان!
        </p>
        @auth
        @else
            <div>
                <a href="#"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black md:text-6xl lg:text-4xl">
                    سجل لرفع الاجراءات</a>
            </div>
        </div>
    @endauth
</section>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                screens: {
                    sm: '320px',
                    sl: '370px',
                    md: '768px',
                    lg: '1200px',

                },
                extend: {
                    colors: {
                        laravel: "purple",
                    },
                },
            },
        };
    </script>
    <title>إجرائي | جد خطوات اجرائك الان</title>
</head>

<x-flash-message />

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{ asset('images/_logo.png') }}" alt="" class="logo" /></a>
        <ul class="flex  space-x-2 mr-2 text-lg md:text-2xl">
            @auth
                <li>
                    <a href="#" class="hover:text-laravel">|مشاركاتي <i class="fa-solid fa-gear"></i>
                    </a>
                </li>
                <li>
                    <a href="/logout" class="hover:text-laravel">تسجيل خروج <i class="fa-solid fa-door-closed"></i>
                    </a>
                </li>
            @else
                <li>
                    <a href="/clients/create" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> سجل</a>
                </li>
                <li>
                    <form action="/login" method="get">
                        <button>
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>تسجيل دخول
                        </button>
                    </form>
                </li>
            @endauth
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a href="/ejras/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">ساعد
            غيرك</a>
    </footer>
</body>

</html>

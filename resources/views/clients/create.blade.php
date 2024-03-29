<x-layout-card>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                تسجيل حساب
            </h2>
            <p class="mb-4">قم بانشاء حساب لتصبح داعما</p>
        </header>

        <form method="POST" action="/clients">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    الاسم
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ old('name') }}" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">البريد الالكتروني</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    كلمة المرور
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{ old('password') }}" />
                @error('password')
                    <p class="text-red-500 text-xs
                mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">
                    تأكيد كلمة المرور
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                    <p class="text-red-500
            text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    سجل
                </button>
            </div>

            <div class="mt-8">
                <p>
                    انت مسجل مسبقا؟
                    <a href="/clients/login" class="text-laravel">تسجيل دخول</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout-card>

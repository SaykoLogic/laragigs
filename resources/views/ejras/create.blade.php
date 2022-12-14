<x-layout-card>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                انشاء اجراءا
            </h2>
            <p class="mb-4">قم بنشر الاجراء لتصبح داعما</p>
        </header>
        <form method="post" action="/ejras" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="e_name" class="inline-block text-lg mb-2">اسم الاجراء</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="e_name" />

                @error('e_name')
                    <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="docs" class="inline-block text-lg mb-2">
                    المستندات المطلوبة
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="docs"
                    placeholder="Example: Laravel, Backend, Postgres, etc" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }} </p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    كلمات مفتاحية
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }} </p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">مكان الاجراء</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" />

                @error('location')
                    <p class="text-red-500 text-xs
                mt-1"> {{ $message }} </p>
                @enderror

            </div>



            <div class="mb-6">
                <label for="details" class="inline-block text-lg mb-2">
                    خطوات الاجراء بالكامل
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="details" rows="10"
                    placeholder="Include tasks, requirements, salary, etc" value="{{ old('details') }}"></textarea>

                @error('details')
                    <p class="text-red-500
                    text-xs mt-1"> {{ $message }} </p>
                @enderror

            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    انشر الاجراء
                </button>

                <a href="/" class="text-black ml-4"> رجوع </a>
            </div>
        </form>
    </x-card>
</x-layout-card>

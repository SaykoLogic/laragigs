<x-layout-card>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit a Gig
            </h2>
            <p class="mb-4">edit: {{ $ejra->title }}</p>
        </header>
        <form method="post" action="/listings/{{ $ejra->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }} </p>
                @enderror

            </div>


            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc" value="{{ old('description') }}"></textarea>

                @error('description')
                    <p class="text-red-500
                    text-xs mt-1"> {{ $message }} </p>
                @enderror

            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Submit changes
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout-card>

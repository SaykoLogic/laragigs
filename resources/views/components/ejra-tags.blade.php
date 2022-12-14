@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp
<ul class="flex">
    @foreach ($tags as $tag)
        <div class="align-right">
            <li class="bg-purple-900 text-white rounded-xl px-3 py-1 mr-2 ">
                <a href="/?tag={{ $tag }}">{{ $tag }}</a>
            </li>
        </div>
    @endforeach
</ul>

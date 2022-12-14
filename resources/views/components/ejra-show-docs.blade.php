@props(['docsCsv'])

@php
    $docs = explode(',', $docsCsv);
@endphp
<ul class="flex flex-wrap sl:flex flex-row-reverse">
    @foreach ($docs as $doc)
        <div class="text-right">
            <li class="text-black px-1 py-1 mr-2 mt-2 ">
                <a href="/?tag={{ $doc }}">{{ $doc }}</a>
            </li>
        </div>
    @endforeach
</ul>

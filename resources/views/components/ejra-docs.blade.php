@props(['docsCsv'])

@php
    $docs = explode(',', $docsCsv);
@endphp
<ul class="flex flex-row-reverse">
    @foreach ($docs as $doc)
        <div class="align-right">
            <li class="bg-purple-600 text-white rounded-l px-1 py-1 mr-2 mt-2 text-center"> </li>
        </div>
    @endforeach
</ul>

@props(['class' => ''])

@php
    $hasHeader = !empty($header);
    $hasFooter = !empty($footer);

    function getSlotClass($slotName)
    {
        return Arr::get($slotName->attributes, 'class');
    }

    if ($hasHeader) {
        $headerClass = getSlotClass($header);
    }

    if ($hasFooter) {
        $footerClass = getSlotClass($footer);
    }
@endphp

<div
    class="bg-white rounded-md shadow-sm transition duration-150 my-2 sm:my-4 {{ $hasHeader ? 'pt-0' : 'pt-4' }} {{ $hasFooter ? 'pb-0' : 'pb-4' }} {{ $class }}"
>
    @if($hasHeader)
        <div class="py-4 px-4 {{ $headerClass }}">
            {{ $header }}
        </div>
    @endif

    <div class="px-4">
        {{ $slot }}
    </div>

    @if($hasFooter)
        <div class="pb-4 px-4 {{ $footerClass }}">
            {{ $footer }}
        </div>
    @endif
</div>

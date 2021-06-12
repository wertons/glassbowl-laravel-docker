@php
$icon = $icon ?? null;
$color = $color ?? 'blue';
$href = $href ?? '';
$type = $type ?? 'button';
@endphp

@if($type == 'submit')
<button type="{{$type}}" class="shadow flex items-center px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-<?= $color ?>-500 rounded dark:bg-gray-800 hover:bg-<?= $color ?>-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-<?= $color ?>-500 dark:focus:bg-gray-700">
    @if ($icon)
    <i class="fa fa-<?= $icon ?>"></i>
    @endif
    <span class="mx-1">{{__((string) $slot)}}</span>
</button>

@else
<a href="{{$href}}">
    <button type="{{$type}}" class="shadow flex items-center px-2 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-<?= $color ?>-500 rounded dark:bg-gray-800 hover:bg-<?= $color ?>-600 dark:hover:bg-gray-700 focus:outline-none focus:bg-<?= $color ?>-500 dark:focus:bg-gray-700">
        @if ($icon)
        <i class="fa fa-<?= $icon ?>"></i>
        @endif
        <span class="mx-1">{{__((string) $slot)}}</span>
    </button>
</a>
@endif
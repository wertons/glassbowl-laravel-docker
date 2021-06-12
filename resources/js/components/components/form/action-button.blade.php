@php
$color = $color ?? 'gray';
$iconClass = " fa fa-".($icon ?? 'home');
$type = $type ?? 'link';

@endphp
@if ($attributes['type']=='form')
<form class="inline" method="POST" action="{{ $href }}" onclick="event.preventDefault(); confirm('Are you sure?') && this.submit();">
    @csrf
    @method('DELETE')
    @endif

    @if ($attributes['type']=='post')
    <form class="inline" method="POST" action="{{ $href }}" onclick="event.preventDefault(); this.submit();">
        @csrf
        @method('POST')
        @endif
        <span>
            <a {{ $attributes->merge(['class'=>" fa rounded-full p-2 my-1 bg-$color-500 text-white transition-colors duration-200 transform hover:bg-$color-800" ]) }}>

                @if (isset($label))
                <span class="text-xs font-light">
                    {{$label}}
                </span>

                @endif
            </a>
        </span>
        @if ($attributes['type']=='form' || $attributes['type']=='post')
    </form>
    @endif
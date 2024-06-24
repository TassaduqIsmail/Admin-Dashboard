@props(['hrefs' => [], 'iconClass' => '', 'label'])


@php

    $expandClass = '';
    $active = false;

    foreach ($hrefs as $href) {
        if (request()->routeIs($href)) {
            $expandClass = 'mm-active';
            $active = true;
            break;
        }
    }

@endphp

@if ($slot->isNotEmpty())
    <li class="{{ $expandClass }} ">
        <a href="javascript: void(0);" data-bs-toggle="slide" class="has-arrow waves-effect {{ $active ? 'mm-active' : '' }}"
            aria-expanded="{{ $active }}">
            <i class="{{ $iconClass }}"></i>
            <span class="">{{ $label }}</span>
            {{-- <i class="angle fa fa-angle-right"></i> --}}
        </a>
        <ul class="sub-menu mm-collapse {{ $active ? 'mm-show' : '' }}">
            {{-- <li class=""><a href="#">{{ $label }}</a></li> --}}

            {{ $slot }}

        </ul>
    </li>
@endif

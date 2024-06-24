@props(['href' => '#', 'iconClass' => '', 'action' => ''])
@php
    $action = $action ? Arr::wrap($action) : '';
@endphp

@if ($action)
    @canany($action)
        <li class="{{ request()->url() == $href ? 'mm-active' : '' }}">
            <a class="waves-effect {{ request()->url() == $href ? 'active' : '' }}" href="{{ $href }}">
                <i class="{{ $iconClass }}"></i>
                <span>{{ $slot }}</span>
            </a>
        </li>
    @endcanany
@else
    <li class="{{ request()->url() == $href ? 'mm-active' : '' }}">
        <a class="waves-effect {{ request()->url() == $href ? 'active' : '' }}" href="{{ $href }}">
            <i class="{{ $iconClass }}"></i>
            <span>{{ $slot }}</span>
        </a>
    </li>
@endif

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-reservio focus:ring-1 focus:ring-reservio focus:ring-opacity-50']) !!}>

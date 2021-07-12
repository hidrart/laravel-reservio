<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
            <img width="240" class="m-2" src="{{ asset('src/Asset 1.svg') }}"></img>
            @endif
        </a>
    </td>
</tr>

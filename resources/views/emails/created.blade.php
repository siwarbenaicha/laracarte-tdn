@component('mail::message')
# Hey Siwar

<ul>
{{--    <li>{{ $name  }} </li>--}}
    <li>{{ $msg->name  }} </li>
    <li>{{ $msg->email  }} </li>
</ul>

@component('mail::panel')
{{--  {{ $msg }}.--}}
{{ $msg->message }}.
@endcomponent


{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

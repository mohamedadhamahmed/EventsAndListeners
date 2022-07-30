@component('mail::message')
hi{{$user->name}}
<h1>welcome </h1>
The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Welcome {{$user->name}}

Thanks for signing up. We really appreciate it. Let us know if we can do anything to help you.

@component('mail::panel')
The email address you have signed up with is: {{$user->email}}
@endcomponent

@component('mail::button', ['url' => 'http://localhost:8000/'])
View My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

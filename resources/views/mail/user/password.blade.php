@component('mail::message')
# Congratulations, your account has been successfully created!

Your password: <strong>{{ $password }}</strong>

@component('mail::button', ['url' => route('login')])
Log In
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

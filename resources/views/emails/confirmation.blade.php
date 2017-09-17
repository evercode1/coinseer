@component('mail::message')
# Confirm Your Account

Please click on the button or copy the url into your browser to confirm your account email.

@component('mail::button', ['url' => 'http://www.coinseer.dev/confirmation?token=' . $user->confirmation_token])
Confirm
@endcomponent

If the button does not appear above, you may use the following url:

<a href="https://www.coinseer.com/confirmation?token={{ $user->confirmation_token }}">https://www.coinseer.com/confirmation?token={{ $user->confirmation_token }}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

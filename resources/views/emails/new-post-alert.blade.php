@component('mail::message')

# Alert

CoinSeer has a new article titled "{{ $post->title }}" posted!

@component('mail::button', ['url' => 'https://www.coinseer.com/post/' . $post->id . '-' . $post->slug])
Go to Article
@endcomponent

If the button does not appear above, you may use the following url:

<a href="https://www.coinseer.com/post/{{ $post->id  }}-{{ $post->slug }}">
    https://www.coinseer.com/post/{{ $post->id  }}-{{ $post->slug }}</a>

@component('mail::panel', ['url' => ''])
You are receiving this email because you subscribed to CoinSeer.
You may Unsubscribe by clicking <a href="http://www.coinseer.com/unsubscribe">here</a>.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Introduction

The body of your message.

- one
- two
- three

@component('mail::button', ['url' => 'http://31.44.81.203/blog'])
start blogging
@endcomponent

@component('mail::panel', ['url' => 'https://laracasts.com'])
just a panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

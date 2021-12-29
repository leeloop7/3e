@component('mail::message')
# Contact Us

There was a new contact us form on the website.

Name: {{$data["name"]}}

E-mail: {{$data["email"]}}

Subject: {{$data["subject"]}}

Message:

{!! $data["message"] !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

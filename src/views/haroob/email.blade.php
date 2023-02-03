<x-mail::message>
# Introduction

    {{$message}}

<x-mail::button :url="''">
Approve
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

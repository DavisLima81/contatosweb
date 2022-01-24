@component('mail::message')
# Introdução

- Opcão 1
- Opcão 2
- Opcão 3

@component('mail::button', ['url' => ''])
Texto do Botão A
@endcomponent

@component('mail::button', ['url' => ''])
Texto do Botão B
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent

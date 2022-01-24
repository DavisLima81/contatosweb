@component('mail::message')
# {{ $tarefa }}

Uma nova tarefa foi atribuída no App Controle de Tarefas!
<br>
Data limite para a conclusão: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Ver registro da tarefa
@endcomponent

Atenciosamente,<br>
{{ config('app.name') }}
@endcomponent

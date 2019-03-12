@extends('emails.layout')
@section('content')
<h1 class="title">Olá Administrador.</h1><p><br></p>
<p class="text">Recebemos uma nova mensagem via website, abaixo os dados recebidos:</p>
<table width="600">
    <tbody><tr>
        <td class="line" width="100">Nome:</td>
        <td class="line">  {{ $contact->name }}  </td>
    </tr>
    <tr>
        <td class="line_two" width="100">E-mail:</td>
        <td class="line_two">{{ $contact->email }}  </td>
    </tr>
    <tr>
        <td class="line" width="100">Telefone:</td>
        <td class="line">  {{ $contact->phone }}  </td>
    </tr>
    <tr>
        <td class="line_two" width="100">Assunto:</td>
        <td class="line_two">  {{ $contact->subject }}  </td>
    </tr>

    <tr>
        <td class="line" width="100">Data:</td>
        <td class="line">  {{ $contact->created_at }}  </td>
    </tr>
    <tr>
        <td class="line_two" width="100">IP:</td>
        <td class="line_two">  {{ $contact->ip }}  </td>
    </tr>
    <tr>
        <td class="line" width="100">Mensagem:</td>
        <td class="line">  {{ $contact->message }}  </td>
    </tr>
</tbody></table>
<br><br>
<p class="text">Abraços,<br>Equipe Jurasic Digital<br></p>
@endsection

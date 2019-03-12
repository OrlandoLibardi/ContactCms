@extends('admin.layout.admin') @section( 'breadcrumbs' )
<!-- breadcrumbs -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9">
        <h2>Contatos Recebidos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/admin">Paínel de controle</a>
            </li>
            <li class="active">Contatos Recebidos </li>
        </ol>
    </div>
    <div class="col-md-3 padding-btn-header text-right">
    </div>
</div>
@endsection @section('content')
<div class="row">
    <div class="col-md-10">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Contatos Recebidos</h5>
                <div class="ibox-tools">
                    <a class="collapse-link"> <i class="fa fa-chevron-up"></i>  </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped" id="results">
                            <thead>
                                <tr>
                                    <td width="200">Assunto</td>
                                    <td width="200">Nome, E-mail, Telefone</td>
                                    <td>Mensagem Reduzida</td>
                                    <td>Data</td>
                                    <td width="50">Abrir</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                @php
                                    $btnClass = "btn-default";
                                    $trClass  = "";
                                    if($contact->status==0){
                                        $btnClass = "btn-primary";
                                        $trClass  = "text-bold";
                                    }
                                @endphp
                                    <tr class="{{ $trClass }}">
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->name }}<br />{{ $contact->email }} <br /> {{ $contact->phone }}</td>
                                        <td>{!! substr($contact->message, 0, 250) !!}</td>
                                        <td>@if(!empty($contact->created_at)) @datetime($contact->created_at) @endif</td>
                                        <td class="text-center"><a href="{{ route('contacts.show', [ 'id' => $contact->id ] ) }}" class="btn {{$btnClass}} btn-sm"><i class="fa fa-folder-open" aria-hidden="true"></i>
</a></td>
                                    </tr>
                                @endforeach
                            </tbody
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style')
<style>
tr.text-bold > td{
    font-weight: bold;
    font-style: italic;;
}
</style>
@endpush
@push('script')
@endpush

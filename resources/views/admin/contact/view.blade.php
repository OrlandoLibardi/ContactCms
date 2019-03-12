@extends('admin.layout.admin') @section( 'breadcrumbs' )
<!-- breadcrumbs -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9">
        <h2>Contatos Recebidos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/admin">Paínel de controle</a>
            </li>
            <li class="active">Contatos Recebido </li>
        </ol>
    </div>
    <div class="col-md-3 padding-btn-header text-right">
        <!--    <a href="javascript:;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-pages">Nova Informção</a> -->
        <a href="{{ route('contacts.index') }}" class="btn btn-warning btn-sm">Voltar</a>
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
                            <tbody>
                                <tr>
                                    <td width="200">Assunto</td>
                                    <td>{{ $contact->subject }}</td>
                                </tr>
                                <tr>
                                    <td>Nome</td>
                                    <td>{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <td>Telefone</td>
                                    <td>{{ $contact->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Mensagem Reduzida</td>
                                    <td>{{$contact->message}}</td>
                                </tr>
                                <tr>
                                    <td>Data</td>
                                    <td>@if(!empty($contact->created_at)) @datetime($contact->created_at) @endif</td>
                                </tr>
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

@endpush
@push('script')
@endpush

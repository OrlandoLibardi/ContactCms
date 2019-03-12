<form id="contact-" name="contact-" action="{{ $form->action }}" method="POST" accept-charset="UTF-8">

    {{ csrf_field() }}
    @if($form->subject_type=='hidden')
        <input type="text" class="form-control input-theme" id="assunto" name="Assunto" value="{{ $form->subject_value }}">
    @endif


    <div class="row">   
       
        <div class="col-12 col-md-6 text-center no-padding">
            @if( $form->title_text )
            <h2 class="title black">{{$form->title_text}}</h2>
            @endif
            @if( $form->content_text )
            <p>{{$form->content_text}}</p>
            @endif
        </div>

        <div class="col-6 col-md-6">
            <div class="form-group">
                <label for="nome" class="label-actions">Nome</label>
                <input type="text" class="form-control input-theme" id="name" name="nome">
            </div>
        </div>
        <div class="col-6 col-md-6">
            <div class="form-group">
                <label for="email" class="label-actions">E-mail</label>
                <input type="text" class="form-control input-theme" id="email" name="email">
            </div>
        </div>
        <div class="col-6 col-md-6">
            <div class="form-group">
                <label for="telefone" class="label-actions">Telefone</label>
                <input type="text" class="form-control input-theme" id="telefone" name="telefone">
            </div>
        </div>
        @if($form->subject_type=='hidden')
        <input type="text" class="form-control input-theme" id="assunto" name="Assunto" value="{{ $form->subject_value }}">
        @else
        <div class="col-6 col-md-6">
            <div class="form-group">
                <label for="assunto" class="label-actions">Assunto</label>
                <input type="text" class="form-control input-theme" id="assunto" name="assunto">
            </div>
        </div>
        @endif
        <div class="col-12 col-md-12">
            <div class="form-group">
                <label for="mensagem" class="label-actions">Mensagem</label>
                <textarea class="form-control input-theme" id="mensagem" name="mensagem"></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group text-right">
                 <button type="submit">Enviar</button> 
            </div>
        </div>
    </div>
</form>


@push('style')
<!-- Style-->

<!-- ./Style-->
@endpush

@push('script')
<!-- sctipt -->

<!-- ./script -->
@endpush

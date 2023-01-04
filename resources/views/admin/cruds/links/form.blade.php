<div class="row col-12">
    <div class="col-12 col-lg-6">
        <div class="card card-body">
            <div class="mb-3">
                {!! Form::label('heard', 'Cliente', ['class' => 'form-label']) !!}
                {!! Form::select('user_id', $users, null, [
                    'class' => 'form-select',
                    'id' => 'heard',
                    'required' => 'required',
                    'placeholder' => 'Selecionar cliente...',
                ]) !!}
            </div>
            
            <div class="mb-3">
                {!! Form::label(null, 'URL', ['class' => 'form-label']) !!}
                {!! Form::url('link', null, [
                    'class' => 'form-control',
                    'required' => 'required',
                    'parsley-type' => 'url',
                ]) !!}
            </div>

        </div> <!-- end card-body-->
    </div> <!-- end card-->
    <div class="col-12 col-lg-6">
        <div class="card card-body">

            <div class="mb-3">
                {!! Form::label('heard', 'Serviço', ['class'=>'form-label']) !!}
                {!! Form::select('name', ['1' => 'Atendimento', '2' => 'Aprovação', '3' => 'Solicitação', '4' => 'Files'], null, [
                    'class'=>'form-select',
                    'id'=>'heard',
                    'required'=>'required',
                    'placeholder' => 'Escolha a solicitação...'
                ]) !!}
            </div>
            
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end row -->

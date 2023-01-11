
<div class="row col-12">
    <div class="col-12 col-lg-6">
        <div class="card card-body">
            <div class="mb-3">
                {!! Form::label(null, 'Nome', ['class'=>'form-label']) !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'id'=>'validationCustom01', 'required'=>'required']) !!}
            </div>
            <div class="mb-3">
                {!! Form::label(null, 'E-mail', ['class'=>'form-label']) !!}
                {!! Form::email('email', null, [
                    'class'=>'form-control',
                    'required'=>'required',
                    'parsley-type'=>'email',
                ]) !!}
            </div>
            <div class="mb-3">
                {!! Form::label(null, 'Contato', ['class'=>'form-label']) !!}
                {!! Form::text('phone', null, [
                    'class'=>'form-control',
                    'data-toggle'=>'input-mask',
                    'required'=>'required',
                    'data-mask-format'=>'(00) 00000-0000',
                ]) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('heard', 'Select', ['class'=>'form-label']) !!}
                {!! Form::select('options', ['0' => 'Cliente', '1' => 'Administrador'], null, [
                    'class'=>'form-select',
                    'id'=>'heard',
                    'required'=>'required',
                    'placeholder' => 'Informe o nível de acesso...'
                ]) !!}
            </div>

        </div> <!-- end card-body-->
    </div> <!-- end card-->
    <div class="col-12 col-lg-6">
        <div class="card card-body">
            <div class="mb-3">
                {!! Form::label(null, 'Senha', ['class'=>'form-label']) !!}
                {!! Form::password('password', [
                        'class'=>'form-control',
                        'id'=>'pass2',
                    ])!!}
                {!! Form::password('password_confirmation', [
                        'class'=>'form-control mt-3',
                        'data-parsley-equalto'=>"#pass2",
                        'placeholder'=>'Confirmar senha',
                    ])!!}
            </div>
            {{-- <div class="mb-3 form-check">
                {!! Form::checkbox('active', '1', null, ['class'=>'form-check-input', 'id'=>'active', 'required'=>'required']) !!}
                {!! Form::label('active', 'Ativar usuário?', ['class'=>'form-check-label']) !!}
            </div> --}}
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end row -->

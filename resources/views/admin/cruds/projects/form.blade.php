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
                {!! Form::label(null, 'Nome do projeto', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control',
                    'id' => 'validationCustom01',
                    'required' => 'required',
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
                {!! Form::label('heard', 'Status', ['class' => 'form-label']) !!}
                {!! Form::select(
                    'status',
                    [
                        '1' => 'A fazer',
                        '2' => 'Em produção',
                        '3' => 'Aguardando',
                        '4' => 'Stand by',
                        '5' => 'Travado',
                        '6' => 'Parado',
                        '7' => 'Em aprovação',
                        '8' => 'Ajustes',
                        '9' => 'Concluído',
                    ],
                    null,
                    [
                        'class' => 'form-select',
                        'id' => 'heard',
                        'required' => 'required',
                        'placeholder' => 'Selecionar status do projeto...',
                    ],
                ) !!}
            </div>
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end row -->

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
                {!! Form::label(null, 'Serviço', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control',
                    'id' => 'validationCustom01',
                    'required' => 'required',
                    'placeholder' => 'Selecione o tipo de serviço...',
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
                {!! Form::label('file', 'Imagem', ['class' => 'form-label']) !!}
                {!! Form::file('path_image', [
                    'data-plugins' => 'dropify',
                    'data-height' => '300',
                    'data-max-file-size-preview' => '2M',
                    'accept' => 'image/*',
                    'data-default-file' => isset($link) ? ($link->path_image != '' ? url('storage/' . $link->path_image) : '') : '',
                ]) !!}
            </div>

        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end row -->

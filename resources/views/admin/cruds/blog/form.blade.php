<div class="row col-12">
    <div class="col-12 col-lg-6">
        <div class="card card-body">
            <div class="mb-3">
                {!! Form::label(null, 'Título', ['class' => 'form-label']) !!}
                {!! Form::text('title', null, [
                    'class' => 'form-control',
                    'id' => 'validationCustom01',
                    'required' => 'required',
                ]) !!}
            </div>
            <div class="mb-3">
                {!! Form::label(null, 'Descrição', ['class' => 'form-label']) !!}
                {!! Form::text('description', null, [
                    'class' => 'form-control',
                    'id' => 'validationCustom01',
                    'required' => 'required',
                ]) !!}
            </div>
            <div class="mb-3">
                {!! Form::label(null, 'Autor', ['class' => 'form-label']) !!}
                {!! Form::text('author', null, [
                    'class' => 'form-control',
                    'id' => 'validationCustom01',
                    'required' => 'required',
                ]) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('complete-editor', 'Texto', ['class' => 'form-label']) !!}
                {!! Form::textarea('text', null, [
                    'class' => 'form-control',
                    'id' => 'complete-editor',
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
                    'data-default-file' => isset($blog) ? ($blog->path_image != '' ? url('storage/' . $blog->path_image) : '') : '',
                ]) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('file', 'Imagem', ['class' => 'form-label']) !!}
                {!! Form::file('path_image_author', [
                    'data-plugins' => 'dropify',
                    'data-height' => '300',
                    'data-max-file-size-preview' => '2M',
                    'accept' => 'image/*',
                    'data-default-file' => isset($blog) ? ($blog->path_image_author != '' ? url('storage/' . $blog->path_image_author) : '') : '',
                ]) !!}
            </div>
            {{-- <div class="mb-3 form-check">
                {!! Form::checkbox('active', '1', null, [
                    'class' => 'form-check-input',
                    'id' => 'active',
                    'required' => 'required',
                ]) !!}
                {!! Form::label('active', 'Ativar blog?', ['class' => 'form-check-label']) !!}
            </div> --}}
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
<!-- end row -->

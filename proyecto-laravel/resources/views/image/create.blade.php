@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        Subir nueva imagen
                    </div>

                    <div class="card-body">
                        <form action=" {{route('image.save')}} " method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="image_path" class="col-md-3 col-form-label text-md-right">Image</label>
                                <div class="col-md-7">
                                    <input type="file" name="image_path" id="image_path" class="form-control" required>
                                    @if ($errors->has('image_path'))
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-3 col-form-label text-md-right">Descripcion</label>
                                <div class="col-md-7">
                                    <textarea name="description" id="description" class="form-control" required> </textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <input type="submit" value="Subir imagen" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

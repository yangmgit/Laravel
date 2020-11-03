@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf            
            <div class="row">
                <div class="col-8 offset-2">
                        <div>
                            <h1>Add New Post</h1>
                        </div>
                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label">post Caption</label>
                            <input id="caption" type="text" 
                            class="form-control @error('caption') is-invalid @enderror" 
                            name="caption"
                             value="{{ old('caption') }}" 
                              autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="row">
                            <label for="image" class="col-md-4 col-form-label">Image </label>
                            <input type="file" class="form-control-file" id='image' name='image'>
                            @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">Add New Post</buttton>
                        </div>
                </div>
                
            </div>
        </form>
    </div>
</div>
@endsection

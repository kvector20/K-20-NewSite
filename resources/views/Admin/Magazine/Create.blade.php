@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>bootstrap4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
  </head>
  <body>
  </body>
</html>
<div class="card">
        <div class="card-header">Create New Magazine Articles</div>
        <div class="card-body">
            <form action="{{route('StoreMagazine')}}" method='post' enctype='multipart/form-data'>
                {{csrf_field()}}

                <div class="md-form">
                    <input type="text" id="form1" name='title' class="form-control" required>
                    <label for="form1">Post Title</label>
                </div>

                <div class="md-form">
                    <input type="text" id="form11" name='author' class="form-control" required>
                    <label for="form11">Author name</label>
                </div>

                <div class="md-form">
                    <input type="text" id="form12" name='collection_name' class="form-control" required>
                    <label for="form12">Collection name</label>
                </div>
                <div class="md-form">
                    <input type="text" id="form13" name='collection_month' class="form-control" required>
                    <label for="form13">Collection month</label>
                </div>



                <div class="md-form">
                    <input type="file" name='img' id="form1" class="form-control" required>
                </div>

                <div class="md-form">
                <textarea id="summernote" name="body"></textarea>
                </div>

                <div class="md-form">
                    <button type="submit" class="btn btn-danger">Save</button>
                </div>

                

            </form>
        </div> 
        <div class="card-footer">Footer</div>
    </div>

    <script>
      $('#summernote').summernote({
        placeholder: 'K-20 Magazine',
        tabsize: 3,
        height: 100
      });
    </script>


@endsection
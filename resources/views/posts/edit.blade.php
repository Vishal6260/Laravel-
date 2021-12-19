@extends('layout.app')

@section('content')<br>
    <h1>Edit Post</h1>
        <div class="mb-3">
            <label for="PostsController@update" class="form-group">Title</label>
             <input type="Title" class="form-group" id="PostsController@update" placeholder="Title">
        </div>
        <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
        <body>

         <textarea name="editor1" id="editor1" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor.
         </textarea>
         <script>
            CKEDITOR.replace( 'editor1' );
         </script>
            
         <input name="file" type="file" id="files" class="form-control" value="">

         <script type="text/javascript">
                function readTextFile(file, callback, encoding) {
            var reader = new FileReader();
            reader.addEventListener('load', function (e) {
                callback(this.result);
            });
            if (encoding) reader.readAsText(file, encoding);
            else reader.readAsText(file);
            }

            function fileChosen(input, output) {
            if (input.files && input.files[0]) {
                readTextFile(
                input.files[0],
                function (str) {
                output.value = str;
                }
                );
            }
            }

            $('#files').on('change', function () {
            var result = $("#files").text();
            
            fileChosen(this, document.getElementById('editor1'));
            CKEDITOR.instances['editor1'].setData(result);
            });
         </script>
       
        </body>
</html> <br>
        <button type="button" class="btn btn-primary btn-sm">Submit</button>
@endsection


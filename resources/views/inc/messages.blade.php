@if(count($errors) > 0)
    @foreach ($erors ->all() as $errors )
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach

@elseif(session('success'))
     <div class="alert alert-success">
     {{session('success')}}
@endif

@if (session('error'))
     <div class="alert alert-danger">
     {{session('error')}}
@endif 

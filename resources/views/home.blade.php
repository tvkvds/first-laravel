@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                
       
        <img src="<?= $image['img'] ?>" alt="<?= $image['user'] . ' - ' . $image['portfolio']?>" width="500" height="600">
        
            
        </div>
    </div>
</div>
@endsection

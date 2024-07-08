@extends('template')


@section('content')
<form action="" method="post">
	@csrf
	<div class="div">
	   <input type="text" name="title" value="{{old('title','default')}}">
		 @error('title')
		 {{$message}}
		 @enderror
	</div>
	<div class="div">
	   <textarea name="content" >{{old('content','default')}}
		 </textarea>
		 @error('content')
		 {{$message}}
		 @enderror

	</div>
	<button>enregistrer</button>

</form>



@endsection
@extends('template')



@section('content')


<h1>helo</h1>
<form action=""  method="post" >
  @csrf  
  <input type="text" name="title" value="{{old('title','default')}}"  >  
  <textarea  name="content">
  {{old('content','default')}} 
  </textarea>
  <button>enregistrer</button>
</form>




@endsection
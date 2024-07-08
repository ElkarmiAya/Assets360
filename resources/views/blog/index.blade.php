@extends('template')

@section('content')
<h1>Mon blog</h1>
@if(false)
{{'hello'}}
@else 

@foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>
            
                {{$post->content}}

        </p>
        <p>
                <a href="{{route('hello.show' , ['slug'=>$post->title,'id'=> $post->id])}}" >lire la suite</a>
        </p>
@endforeach
{{$posts->links()}}




@endif

@endsection
<?php

namespace App\Http\Controllers;

use App\Http\Requests\blogFillterRequest;
use App\Http\Requests\CreatePostRequest;
use App\Models\proo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class blogcontroller extends Controller
{ /*public function index(){
   User::create([
      'name'=>'john',
      'email'=>'john@gmail.com',
       'password'=>Hash::make('1234')
   ]);
}*/

   public function indexx(){
      return view('blog.create2');
   }
    public function store(Request $request){
      $post= proo :: create([
         'title'=>$request->input('title'),
         'content'=>$request->input('content')
      ]);
      $p=proo :: where('title',$request->input ('title'))->Firstorfail();
      return response()->json(['id' => $p->id]);
            dd($request->all());
    }
   }
/*public function index(blogFillterRequest $request):View{

        $proo=proo::paginate(2);
         return View ('blog.index',['posts'=> $proo]) ;

 }

 public function show (string $slug ,string $id, Request $request ): RedirectResponse | proo| View |string {
       
       $title=proo::findOrFail($id);
            if ($title->title != $slug){
                $nom = $request->input('name');
                return to_route('hello.show',['slug'=>$title->title,'id'=>$title->id,'name'=>$nom]);
            };
        $nom = $request->input('name');
        $tit=$title->title;
        return View('blog.show',['nom'=>$nom,'slug'=>$slug,'tit'=>$tit,'id'=>$id ]);
 }
 public function create(){
    return view('blog.create');
 } 
 public function store (CreatePostRequest $request ){
    $proo =proo::create($request->validated());
    //$proo->save();
    return redirect()->route('blog.show')->with('success',"l'article a bien été sauvegardé");

    dd($request ->all());
 }
public function edit(proo $post){

   return view('blog.edit',['post'=>$post]);
     
}
public function update( proo $post , CreatePostRequest $request){
 /*$post->update(
    [
        'title'=>$request->input('title'),
        'content'=>$request->input('content')
    ]
    );
 $post->update($request->validated());
 //the second change
}*/



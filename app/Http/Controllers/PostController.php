<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//////////////MAIN PAGE///////////////////////////////
    public function index()
    {
        $post = post::all();
        
        return view('post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /////////////// CREATE POST///////////////////////////////
    public function create()
    {
        

        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


////////////////////// SAVE DATA IN THE DATABASE //////////////////////////////
    public function store(Request $request)
    {

        $input= $request->all();

        if($file = $request->file('file'))         /////if file exist
        {
            $name =$file->getClientOriginalName();   ///assing original name to the $name var
            $file->move('image',$name); //move file to the destination
            $input['image']=$name; //assign image column with $name
        }

         post::create($input);
        return redirect('/post');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



/////////////////////// POST PAGE /////////////////////////////////////////
    public function show($id)
    {
        $post = post::findOrFail($id);
        
        return view('post.show' ,compact('post'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//////////////////////POST EDIT PAGE///////////////////////////////////////////////
    public function edit($id)
    {
         $post = post::findOrFail($id);

         return view('post.edit', compact('post'));      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    //////////////////////// UPDATE FUNCTION ///////////////////////////////////////
    public function update(Request $request, $id)
    {
        $post = post::findOrFail($id);
        $post->update($request->all());

        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */







    ///////////////////// DELETE FUNCITON///////////////////////////////////////////
    public function destroy($id)
    {
        $post = post::findOrFail($id);
        $post->delete();

        return redirect('post');

        
    }

}

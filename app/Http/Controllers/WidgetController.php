<?php

namespace App\Http\Controllers;

use App\Http\AuthTraits\OwnsRecord;
use Illuminate\Http\Request;
use App\Widget;
use Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\UnauthorizedException;

class WidgetController extends Controller
{
    use OwnsRecord;

    public function __construct()
    {
        // $this->middleware(['auth', 'admin']);
        $this->middleware(['auth', 'admin'], ['except' => ['index', 'show','create', 'store', 'edit', 'realtime', 'showFile']] );
        //$this->middleware('admin', ['except' => ['index', 'show']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('widget.index');

    }
    
    //fetches content of file from google and loads it to a LOCKED text area
    puclic function showFile($id)
    {
       // use ID to get the lick of the file

        $widget = Widget::findOrFail($id);

        //$getLink= $widget->url ;

        
        return view('widget.showFile', compact('getLink'));
    }


    public function realtime()
    {
        return view('widget.realtime');
        
    }
    
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('widget.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required|unique:widgets|string|max:30',

        ]);

         $this->validate($request, ['description' => 'required|unique:widgets|string|max:255',   

             ]);

        $slug = str_slug($request->name, "-");

        $widget = Widget::create(['name' => $request->name,
                                  'slug' => $slug,
                                  'user_id' => Auth::id(),
                                'link_address'=> $request->fullUrl(),
                                'description' => $request->description,
                              ]);

        $widget->save();

        alert()->success('Congrats!', 'You made a Document');

        return Redirect::route('widget.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug = '')
    {
        $widget = Widget::findOrFail($id);


        if ($widget->slug !== $slug) {

            return Redirect::route('widget.show', ['id' => $widget->id,
                                                   'slug' => $widget->slug], 301);
        }



        return view('widget.show', compact('widget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $widget = Widget::findOrFail($id);

        if ( ! $this->adminOrCurrentUserOwns($widget)){

            throw new UnauthorizedException;

        }

        return view('widget.edit', compact('widget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:30|unique:widgets,name,' .$id

        ]);

        $widget = Widget::findOrFail($id);

        if ( ! $this->adminOrCurrentUserOwns($widget)){

            throw new UnauthorizedException;

        }

        $slug = str_slug($request->name, "-");

        $widget->update(['name' => $request->name,
                         'slug' => $slug,
                         'user_id' => Auth::id()]);

        alert()->success('Congrats!', 'You updated a widget');

        return Redirect::route('widget.show', ['widget' => $widget, 'slug' =>$slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Widget::destroy($id);

        alert()->overlay('Attention!', 'You deleted a Decument', 'error');

        return Redirect::route('widget.index');
    }
}

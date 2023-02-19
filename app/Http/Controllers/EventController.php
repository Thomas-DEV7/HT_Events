<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }
    public function create(){
        return view('events.create');

    }
    public function store(Request $request){
        $event = new Event;
        $event->name = $request ->name;
        $event->description = $request ->description;
        $event->city = $request ->city;
        $event->private = $request ->private;
        $event->parts = $request->parts;
        $event->image = url('https://www.pngitem.com/pimgs/m/58-589976_otros-eventos-woman-drinking-icon-hd-png-download.png');
        
        // img upload
        // if($request ->hasFile('image') && $request ->file('image')->isValid()){
        //     $requestImage = $request->image;
        //     $extension = $requestImage->extension();
        //     $imageName = md5($requestImage->getClientOriginalName().strtotime("now"));
        //     $request->image->move(public_path("events"), $imageName);
        //     $event->image = $imageName;
        // }
        
        $event->save();
        return redirect('/')->with('msg', "Evento criado com sucesso!");
    }
    public function show($id){
        $event = Event::findOrfail($id);
        return view ('events.show', ['event' => $event]);
    }
}

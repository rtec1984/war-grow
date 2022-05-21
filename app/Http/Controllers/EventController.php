<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Event;
use App\Models\User;
class EventController extends Controller
{

    public function index()
    {        
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        $event = new Event;
        $event->partida = $request->partida;
        $event->date = $request->date;
        $event->vitoria = $request->vitoria;
        $user = auth()->user();
        $event->user_id = $user->id;
        $event->vencedor = $user->name;
        $event->save();

        return redirect() ->route('resultado', [$event->id])->with('msg', 'Resultado cadastrado com sucesso!');
    }

    public function resultado($id)
    {

        $event = Event::findOrFail($id);
        $user = auth()->user();
        $hasUserJoined = false;

        if ($user) {

            $userEvents = $user->eventsAsParticipant->toArray();

            foreach ($userEvents as $userEvent) {
                if ($userEvent['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.resultado', ['event' => $event, 'eventOwner' => $eventOwner, 'hasUserJoined' => $hasUserJoined]);
    }


    public function resultados()
    {

        $user = auth()->user();
        $events = $user->events;
        $eventsAsParticipant = $user->eventsAsParticipant;

        return view(
            'events.resultados',
            ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]
        );
    }

    public function destroy($id)
    {

        Event::findOrFail($id)->delete();

        return redirect('/resultados')->with('msg', 'Resultado excluído com sucesso!');
    }

    public function edit($id)
    {

        $user = auth()->user();
        $event = Event::findOrFail($id);

        if ($user->id != $event->user_id) {
            return redirect('/resultados');
        }

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request)
    {

        $data = $request->all();
        Event::findOrFail($request->id)->update($data);

        return redirect('/resultados')->with('msg', 'Resultado editado com sucesso!');
    }

    public function joinEvent($id)
    {

        $user = auth()->user();
        $user->eventsAsParticipant()->attach($id);
        $event = Event::findOrFail($id);

        return redirect('/resultados')->with('msg', 'Sua participação está confirmada no resultado da ' . $event->partida . ' - ' . date('d/m/Y', strtotime($event->date)));
    }

    public function leaveEvent($id)
    {

        $user = auth()->user();
        $user->eventsAsParticipant()->detach($id);
        $event = Event::findOrFail($id);

        return redirect('/resultados')->with('msg', 'Você saiu com sucesso do resultado da ' . $event->partida . ' - ' . date('d/m/Y', strtotime($event->date)));
    }
}

<?php

namespace App\Http\Controllers;

use App\Helper\Ranking;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all()
            ->sortBy('id', SORT_REGULAR, true)
            ->take(10);

        return view('welcome', ['events' => $events]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        $event = new Event;
        $event->date = $request->date;
        $event->victory = $request->victory;
        $event->players = $request->players;        
        $user = auth()->user();
        $event->user_id = $user->id;
        $event->save();      

        return redirect()->route('result', [$event->id])->with('msg', 'Resultado cadastrado com sucesso!');
    }

    public function result($id)
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

        return view('events.result', ['event' => $event, 'eventOwner' => $eventOwner, 'hasUserJoined' => $hasUserJoined]);
    }


    public function results()
    {
        $user = auth()->user();
        $events = $user->events;
        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.results', ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]);
    }

    public function destroy($id)
    {

        Event::findOrFail($id)->delete();

        return redirect('/results')->with('msg', 'Resultado excluído com sucesso!');
    }

    public function edit($id)
    {

        $user = auth()->user();
        $event = Event::findOrFail($id);

        if ($user->id != $event->user_id) {
            return redirect('/results');
        }

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request)
    {

        $data = $request->all();
        Event::findOrFail($request->id)->update($data);

        return redirect('/results')->with('msg', 'Resultado editado com sucesso!');
    }

    public function joinEvent($id)
    {

        $user = auth()->user();
        $user->eventsAsParticipant()->attach($id);
        $event = Event::findOrFail($id);

        return redirect('/results')->with('msg', 'Sua participação está confirmada no resultado da PARTIDA Nº ' . $event->id . ' - ' . date('d/m/Y', strtotime($event->date)));
    }

    public function leaveEvent($id)
    {

        $user = auth()->user();
        $user->eventsAsParticipant()->detach($id);
        $event = Event::findOrFail($id);

        return redirect('/results')->with('msg', 'Você saiu com sucesso do resultado da PARTIDA Nº ' . $event->id . ' - ' . date('d/m/Y', strtotime($event->date)));
    }

    public function ranking()
    {
        $events = Event::all($events = 'user_id', 'victory');
        $users = User::all($users = 'id', 'name');
        $list = Ranking::ranking($users, $events);
        $list = collect($list)->sortBy([
            ['points', 'desc'],
            ['percent', 'desc'],
            ['victory', 'desc'],
        ])->toArray();

        return view('ranking', ['events' => $events, 'users' => $list]);
    }

}
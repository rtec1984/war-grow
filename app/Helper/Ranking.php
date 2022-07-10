<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;
use App\Models\Event;

class Ranking
{
    public static function ranking($users, $events)
    {
        $list = [];
        foreach ($users as $key => $item) {
            $victories = $events->where('user_id', $item['id'])->count();
            $list[$key] = $item;
            $list[$key]['victory'] = $victories;
            $list[$key]['games'] = count($item->eventsAsParticipant);
            if (count($item->eventsAsParticipant) == 0) {
                $list[$key]['points'] = 0;
                $list[$key]['percent'] = 0;
            } else {
                $list[$key]['points'] = number_format($events->where('user_id', $item->id)->pluck('victory')->sum() /
                    100 * $events->where('user_id', $item->id)->count() /
                    count($item->eventsAsParticipant) * 100);
                $list[$key]['percent'] = number_format($victories / count($item->eventsAsParticipant) * 100);
            }
        }
        return $list;
    }
}

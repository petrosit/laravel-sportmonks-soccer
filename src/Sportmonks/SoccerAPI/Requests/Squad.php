<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Squad extends SoccerAPIClient {

    public function bySeasonAndTeam($season_id,$team_id)
    {
        return $this->callData('squad/season/' . $season_id . '/team/' . $team_id);
    }

}

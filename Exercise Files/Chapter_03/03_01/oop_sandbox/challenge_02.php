<?php 
class Game {
    var $ign = 'Yajiron';
    var $first_name = 'Jay';
    var $last_name = 'Bayron';
    var $game_name;
    var $goal;
    var $rules;
    var $status = 'Not a pro-player';

    function player() {
        return "IGN: $this->ign <br />
                Fullname: $this->first_name $this->last_name <br />
                Status: $this->status";
    }
}

class On_game extends Game {
    var $status = 'Pro-player';
    function instruction(){
        return "Game name: $this->game_name <br />
                Goal: $this->goal <br />
                Rules: $this->rules <br />
                Status: $this->status";
    }
}

class Off_game extends Game {
    var $status = 'leisure';
    function instruction(){
        return "Game name: $this->game_name <br />
                Goal: $this->goal <br />
                Rules: $this->rules <br />
                Status: $this->status";
    }
}

$game = new Game();
echo $game->player(). "<br />";

$on_game = new On_game();
$on_game->game_name = 'league of Legends';
$on_game->goal = 'Destroy the enemy inhibitor of the enemy to win!';
$on_game->rules = 'Dont use a third-part on this game. ever!';
echo '<br /><br />Online Games<br />';
echo $on_game->instruction(). "<br />";

$off_game = new Off_game();
$off_game->game_name = 'Warcraft';
$off_game->goal = 'Stay alive until the time is over';
$off_game->rules = 'No rules, just play what ever you wanted!';
echo '<br /><br />Offline Games<br />';
echo $off_game->instruction(). "<br />";


?>
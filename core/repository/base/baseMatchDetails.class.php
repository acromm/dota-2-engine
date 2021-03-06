<?php
/**
 * category repository base.
 *
 * @package    dota 2 engine
 * @author     roozbeh baabakaan
 * @toDo       read https://github.com/roozbeh360/dota-2-engine
 */  
  
abstract class baseMatchDetails{
	
	public $players = array() ;
	public $season ;
	public $radiant_win ;
	public $duration ;
	public $starttime ;
	public $match_id ;
	public $tower_status_radiant ;
	public $tower_status_dire ;
	public $barracks_status_radiant ;
	public $barracks_status_dire ;
	public $cluster ;
	public $first_blood_time ;
	public $replay_salt ;
	public $lobby_type ;
	public $human_players ;
	public $leagueid ;
	public $positive_votes ;
	public $negative_votes ;
	public $game_mode ;
	public $start_time ;
	public $radiant_name ;
	public $dire_name ;
	public $radiant_logo;
	public $dire_logo;
	public $radiant_team_complete ;
	public $dire_team_complete ;
	public $match_seq_num ;
	public $picks_bans ;
	public $radiant_team_id;
	public $dire_team_id ;
	public $radiant_team ;
	public $dire_team;
	public $lobby_id;
	public $spectators;
	public $tower_state;
	public $league_id;
	
	public function setPlayers($array)
	{
		foreach($array as $object)
		{
			$player = $object;
			$this->players[] = $player ;
		}
	}
	
	public function getPlayers()
	{
		return $this->players ;	
	}
	
	public function setSeason($season)
	{
		$this->season = $season ;
	}
	
	public function getSeason()
	{
		return $this->season ;
	}
	
	public function setRadiant_win($radiant_win)
	{
		$this->radiant_win = $radiant_win ;
	}
	
	public function getRadiant_win()
	{
		return $this->radiant_win ;
	}
	
	public function setDuration($duration)
	{
		$this->duration = $duration ;
	}
	
	public function getDuration()
	{
		return $this->duration ;
	}
	
	public function setStarttime($starttime)
	{
		$this->starttime = $starttime ;
	}
	
	public function getStarttime()
	{
		return $this->starttime ;
	}
	
	public function setMatch_id($match_id)
	{
		$this->match_id = $match_id ;
	}
	public function getMatch_id()
	{
		return $this->match_id ;
	}
	
	public function setTower_status_radiant($tower_status_radiant)
	{
		$this->tower_status_radiant =$tower_status_radiant ;
	}
	
	public function getTower_status_radiant()
	{
		return $this->tower_status_radiant ;
	}
	
	public function setTower_status_dire($tower_status_dire)
	{
		$this->tower_status_dire = $tower_status_dire ;
	}
	
	public function getTower_status_dire()
	{
		return $this->tower_status_dire ;
	}
	
	public function setBarracks_status_radiant($barracks_status_radiant)
	{
		$this->barracks_status_radiant = $barracks_status_radiant ;
	}
	
	public function getBarracks_status_radiant()
	{
		return $this->barracks_status_radiant ;
	}
	
	public function setBarracks_status_dire($barracks_status_dire)
	{
		$this->barracks_status_dire = $barracks_status_dire ;
	}
	
	public function getBarracks_status_dire()
	{
		return $this->barracks_status_dire ;
	}
	
	public function setCluster($cluster)
	{
		$this->cluster = $cluster ;
	}
	
	public function getCluster()
	{
		return $this->cluster ;
	}
	
	public function setFirst_blood_time($first_blood_time)
	{
		$this->first_blood_time ;
	}
	
	public function getFirst_blood_time()
	{
		return $this->first_blood_time ;
	}
	
	public function setReplay_salt($replay_salt)
	{
		$this->replay_salt = $replay_salt ;
	}
	public function getReplay_salt()
	{
		return $this->replay_salt ;
	}
	
	public function setLobby_type($lobby_type)
	{
		$this->lobby_type = $lobby_type ;
	}
	
	public function getLobby_type()
	{
		return $this->lobby_type ;
	}
	
	public function getLobby_type_name()
	{
		switch ($this->lobby_type) {
			case '0':
				return 'Public matchmaking' ;
				break;
			case '1':
				return 'Practise' ;
				break;
			case '2':
				return 'Tournament' ;
				break;
			case '3':
				return 'Tutorial' ;
				break;
			case '4':
				return 'Co-op with bots' ;
				break;
			case '5':
				return 'Team match' ;
				break;
			default:
				return 'Invalid' ;
				break;
				}
	}
	
	public function setHuman_players($human_players)
	{
		$this->human_players = $human_players ;
	}
	
	public function getHuman_players()
	{
		return $this->human_players ;
	}
	
	public function setLeagueid($leagueid)
	{
		$this->$leagueid = $leagueid ;
	}
	
	public function getLeagueid()
	{
		return $this->leagueid ;
	}
	
	public function setPositive_votes($positive_votes)
	{
		$this->positive_votes = $positive_votes ;
	}
	
	public function getPositive_votes()
	{
		return $this->positive_votes ;
	}
	
	public function setNegative_votes($negative_votes)
	{
		$this->negative_votes = $negative_votes ;
	}
	
	public function getNegative_votes()
	{
		return $this->negative_votes ;
	}
	
	public function setGame_mode($game_mode)
	{
		$this->game_mode = $game_mode ;
	}
	public function getGame_mode()
	{
		return $this->game_mode ;
	}
	
		public function setStart_time($start_time)
	{
		$this->start_time = $start_time ;
	}
	
	public function getStart_time()
	{
		return $this->start_time ;
	}
	
	public function getMatch_replay()
	{
		/**
		 * return match replay url for download in string format 
		 * attention this will not work unless players grant the match
		 */
		$cluster = $this->cluster ;
		$match_id =$this->match_id ;
		$replay_salt = $this->replay_salt ;
		return "http://replay$cluster.valve.net/570/$match_id"."_"."$replay_salt.dem.bz2" ;
	}
	
	public function setRadiant_name($radiant_name)
	{
		$this->radiant_name = $radiant_name ;
	}
	
	public function getRadiant_name()
	{
		return $this->radiant_name ;
	}
	
	public function setDire_name($dire_name)
	{
		$this->dire_name = $dire_name ;
	}
	
	public function getDire_name()
	{
		return $this->dire_name ;
	}
	
	public function setRadiant_logo($radiant_logo)
	{
		$this->radiant_logo = $radiant_logo ;
	}
	
	public function getRadiant_logo()
	{
		return $this->radiant_logo ;
	}
	
	public function setDire_logo($dire_logo)
	{
		$this->dire_logo = $dire_logo ;
	}
	
	public function getDire_logo()
	{
		return $this->dire_logo ;
	}
	
	public function  setRadiant_team_complete($radiant_team_complete)
	{
		$this->radiant_team_complete = $radiant_team_complete ;
	}
	
	public function  getRadiant_team_complete()
	{
		return $this->radiant_team_complete ;
	}
	
	public function  setDire_team_complete($dire_team_complete)
	{
		$this->dire_team_complete = $dire_team_complete ;
	}
	
	public function  getDire_team_complete()
	{
		return $this->dire_team_complete ;
	}
	
	public function setMatch_seq_num($match_seq_num)
	{
		$this->match_seq_num = $match_seq_num ;
	}
	
	public function getMatch_seq_num()
	{
		return $this->match_seq_num ;
	}
	
	public function getGame_mode_name()
	{
		switch ($this->game_mode) {
			case '0':
				return 'All Pick' ;
				break;
			case '1':
				return 'Single Draft' ;
				break;
			case '2':
				return 'All Random' ;
				break;				
			case '3':
				return 'Random Draft' ;
				break;	
			case '4':
				return 'Captain"s Draft' ;
				break;
			case '5':
				return "Captain's Mode" ;
				break;	
			case '6':
				return 'Death Mode' ;
				break;
			case '7':
				return 'Diretide' ;
				break;
			case '8':
				return 'Reverse Captain"s Mode' ;
				break;
			case '9':
				return 'The Greeviling' ;
				break;
			case '10':
				return 'Tutorial' ;
				break;
			case '11':
				return 'Mid Only' ;
				break;			
			case '12':
				return 'Least Played' ;
				break;	
			case '13':
				return 'New Player Pool' ;
				break;					
			default:
				return 'None' ;
				break;
		}
	}
	
	public function setPicks_bans($picks_bans)
	{
		$this->picks_bans = $picks_bans ;
	}
	
	public function getPicks_bans()
	{
		return $this->picks_bans ;
	}
	
	public function setRadiant_team_id($radiant_team_id)
	{
		$this->radiant_team_id = $radiant_team_id ;
	}
	
	public function getRadiant_team_id()
	{
		return $this->radiant_team_id ;
	}
	
	public function setDire_team_id($dire_team_id)
	{
		$this->dire_team_id = $dire_team_id ;
	}
	
	public function getDire_team_id()
	{
		return $this->dire_team_id ;
	}
	
	public function setRadiant_team($radiant_team)
	{
		$this->radiant_team =  $radiant_team;
	}
	
	public function getRadiant_team()
	{
		return $this->radiant_team ;
	}
	
	public function setDire_team($dire_team)
	{
		$this->dire_team = $dire_team ;
	}
	
	public function getDire_team()
	{
		return $this->dire_team ;
	}
	
	public function setLobby_id($lobby_id)
	{
		$this->lobby_id =  $lobby_id;
	}
	
	public function getLobby_id()
	{
		return $this->lobby_id ;
	}
	public function setSpectators($spectators)
	{
		$this->spectators =  $spectators;
	}
	
	public function getSpectators()
	{
		return $this->spectators ;
	}
	public function setTower_state($tower_state)
	{
		$this->tower_state = $tower_state ;
	}
	
	public function getTower_state()
	{
		return $this->tower_state ;
	}
	public function setLeague_id($league_id)
	{
		$this->league_id = $league_id ;
	}
	
	public function getLeague_id()
	{
		return $this->league_id ;
	}
	
	
}

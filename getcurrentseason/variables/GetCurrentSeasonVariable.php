<?php
namespace Craft;
class GetCurrentSeasonVariable
{
	public function get($dt = NULL)
	{
		if (is_null($dt)) $dt = date("Y-m-d");

		$currentDay = date("z", strtotime($dt));
		$currentYear = date("Y", strtotime($dt));

		$spring_starts = date("z", strtotime($currentYear.'-3-20'));
		$spring_ends   = date("z", strtotime($currentYear.'-6-20'));
		$summer_starts = date("z", strtotime($currentYear.'-6-21'));
		$summer_ends   = date("z", strtotime($currentYear.'-9-21'));
		$autumn_starts = date("z", strtotime($currentYear.'-9-22'));
		$autumn_ends   = date("z", strtotime($currentYear.'-12-20'));
		
		if ($currentDay >= $spring_starts and $currentDay <= $spring_ends) $season = 'spring';
		else if ($currentDay >= $summer_starts and $currentDay <= $summer_ends) $season = 'summer';
		else if ($currentDay >= $autumn_starts and $currentDay <= $autumn_ends) $season = 'autumn';
		else $season = 'winter';
		
		return $season;
	}
}

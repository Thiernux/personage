<?php

namespace App\Classes;

class Weapon
{
	private $name;
	private $detail = [];
	public static $weapons = [];

	public function __construct($name, $detail)
	{
		$this->name = $name;
		$this->detail = $detail;
		self::$weapons[] = $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDetail()
	{
		return $this->detail;
	}

	public static function weaponList()
	{
		$weapons = new Weapon('arc', ['description'=>'Nice arc and speed', 'damage'=>'10']);
		$weapons =  new Weapon('epee', ['description'=>'cutting epee', 'damage'=>'8']);
		$weapons = new Weapon('hache', ['description'=>'mightyx ax', 'damage'=>'9']);
	}

	public static function showByName($name)
	{
		foreach (self::$weapons as $weapon)
		{
			if (strtolower($weapon->name) == $name) 
			{
				return $weapon;
			}
		}
	}



}
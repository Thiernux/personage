<?php

namespace App\Classes;

class Personage
{

	public $pseudo;
	public $old;
	public $gender;
	public $carac=[];

	public static $j=[];
	

	function __construct($pseudo, $old, $gender, $carac)
	{
		$this->pseudo = $pseudo;
		$this->old = $old;
		$this->gender = $gender;
		$this->carac = $carac;
		self::$j[] = $this;
	}




	public static function newPersonage()
	{
		$perso1 = new Personage('Marc', 25, 'Men', ['strength' =>3, 'agility' =>2, 'intelligence' =>3]);
		$perso2 = new Personage('Milo', 22, 'Men', ['strength' =>2, 'agility' =>1, 'intelligence' =>3]);
		$perso3 = new Personage('Tya', 23, 'Women', ['strength' =>4, 'agility' =>2, 'intelligence' =>1]);


	}

	public static function personage($name)
	{
		foreach (self::$j as $perso) 
		{
			if (strtolower($perso->pseudo) == $name) 
			{
				return $perso;
			}
		}
	}

}

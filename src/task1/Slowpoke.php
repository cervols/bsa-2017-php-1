<?php

namespace BinaryStudioAcademy\Task1;

class Slowpoke implements Pokemon
{	
	public $name = "Slowpoke";
	public function battleCry(): string
	{
		return "So slow!";
	}
	public function imageUrl(): string
	{
		return "https://img.pokemondb.net/artwork/slowpoke.jpg";
	}
}
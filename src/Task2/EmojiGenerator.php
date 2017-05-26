<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
	const EMOJI = [
		"\u{1f600}",
		"\u{1f603}",
		"\u{1f604}",
		"\u{1f601}",
		"\u{1f606}",
		"\u{1f605}",
		"\u{1f602}"
	];
    public function generate()
    {
        //TODO: Implement emoji generator using yield
		foreach (self::EMOJI as $em)
			yield $em;
    }
}

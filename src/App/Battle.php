<?php

namespace App;

class Battle
{
    private $fightTitle;
    private $chars;

    public function __construct($fightTitle)
    {
        $this->fightTitle = $fightTitle;
    }

    public function addChar($char)
    {
        $this->chars[] = $char;
    }

    public function start()
    {
        echo sprintf('%s Fight!' . PHP_EOL, $this->fightTitle);

        $charsAndAttributes = array_map(function ($charAndAttr) {
            return sprintf(
                'Char: %s, Power: %s',
                $charAndAttr->getName(),
                $charAndAttr->getAttribute()
            );
        }, $this->chars);

        echo implode(PHP_EOL, $charsAndAttributes);
    }
}

<?php
require_once __DIR__.'/../lib/Player.php';

class PlayerCollection extends InfiniteIterator {

    protected $players;
    protected $arrayIterator;

    public function __construct($arrayIterator) {
        $this->arrayIterator = $arrayIterator;
        parent::__construct($this->arrayIterator);
    }

    public function next() {
        return next();
    }

    public function getInnerIterator() {
        return $this->arrayIterator;
    }

    public function add(Player $player) {
        $this->players[] = $player;
    }

    public function first() {
        return $this->players[0];
    }
}
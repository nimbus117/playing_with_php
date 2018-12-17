#!/usr/bin/php
<?php

/**
 * Class Game
 * @author nimbus117
 */
class Game {

  private $player1;
  private $player2;
  private $whoBeatsWho = [
    'rock' => 'scissors',
    'paper' => 'rock',
    'scissors' => 'paper'
  ];

  public function __construct(String $player1, String $player2) {
    $this->player1 = strtolower($player1);
    $this->player2 = strtolower($player2);
  }

  public function getWinner(): String {

    if ($this->player1 === $this->player2) return 'draw';
    return $this->whoBeatsWho[$this->player1] === $this->player2
      ? 'player1 wins'
      : 'player2 wins';
  }
}

$game = new Game($argv[1], $argv[2]);
echo $game->getWinner();

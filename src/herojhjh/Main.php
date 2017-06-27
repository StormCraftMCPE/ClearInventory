<?php

namespace herojhjh;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerGameModeChangeEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase implements Listener{
  public function OnEnable(){
    $this->getServer()->getLogger()->info(C::GREEN."ClearInventory Enabled.");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onDisable(){
    $this->getLogger()->info(C::RED . "ClearInventory disabled!");
  }
  public function OnGameModeChange(PlayerGameModeChangeEvent $event){
    $player = $event->getPlayer();
    $player->getInventory()->clearAll();
  }
}

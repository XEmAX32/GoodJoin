<?php
namespace GoodJoin

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;
use pocketmine\event\PlayerQuitEvent;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::BLUE . " [GoodJoin enabled]");
$this->saveDefaultConfig();
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . " [GoodJoin disabled]");
}

public function onJoin(PlayerJoinEvent() $e){
$name = $e->getPlayer()->getName();
$p = $e->getPlayer();
$opmsg = $e
  foreach($this->getServer()->getOnlinePlayers() as $ps){
    if($e->getPlayer()->isOp()){
      $ps->sendMessesage();
    }else{
      $ps->sendMessage(TextFormat::GREEN . "[+] $name");
    }
    if($player->isBanned()){
      if($ps->isOp()){
        $ps->sendMessage(TextFormat::RED . "$name Tried To Join The Server");
      }
    }
  }
}

public function onQuit(PlayerQuitEvent $e){
$name = $e->getPlayer()->getName();
  foreach($this->getServer()->getOnlinePlayers() as $ps){
    $ps->sendMessage(TextFormat::RED . "[-] $name");
  }
 }
}

<?php
namespace GoodJoin;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerSpawnEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::BLUE . " [GoodJoin enabled]");
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . " [GoodJoin disabled]");
}

public function OnPlayerSpawn(PlayerSpawnEvent $event){
  $players = $this->getServer()->getLevelByName("world")->getPlayers();
  $player = $event->getPlayer()->getName();
$players->SendMessage(TextFormat::GREEN . "[+] .$this->getPlayer()->getName().");
}

public function OnPlayerQuit(PlayerQuitEvent $event){
  $players = $this->getServer()->getLevelByName("world")->getPlayers();
  $player = $event->getPlayer()->getName();
$players->SendMessage(TextFormat::RED . "[-] .$this->getPlayer()->getName().");
}

public function OnPlayerJoin(PlayerJoinEvent $event){
  $player = $event->getPlayer();
  $message = $this->getConfig()->get("Message");
  $player->sendMessage("$message");
}
}
?>

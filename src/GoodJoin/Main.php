<?php
namespace GoodJoin;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::BLUE . " [GoodJoin enabled]");
$this->saveDefaultConfig();
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . " [GoodJoin disabled]");
}

public function OnJoin(PlayerJoinEvent $event){
foreach($this->getServer()->getPlayers() as $players){
$player = $event->getPlayer();
$players->sendMessage(TextFormat::GREEN . "[+] " $this->getPlayer()->getName()." ");
$player = $event->getPlayer();
$message = $this->getConfig()->get("JoinMessage");
$player->sendMessage("$joinmessage");
}
}

public function OnQuit(PlayerQuitEvent $event){
  foreach($this->getServer()->getPlayers() sa $ps){
  $player = $event->getPlayer()->getName();
  $ps->SendMessage(TextFormat::RED . "[-]" $this->getPlayer()->getName().");
}
}

public function PlayerFirstJoin(PlayerFirstJoinEvent $e){
$firstjoinmessage = $this->getConfig()->get("firstjoinmessage");
foreach($this->getServer()->getPlayers() as $ps){
$ps->sendMessage($firstjoinmessage." ");
}
}
}
?>

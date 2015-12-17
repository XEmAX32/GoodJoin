<?php

namespace GoodJoin;

use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

public function OnEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
$this->getLogger()->info(TextFormat::BLUE . "[GoodJoin enabled]");
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . " [GoodJoin disabled]");
}

public function OnJoin(PlayerJoinEvent $e){
$name = $e->getPlayer()->getName();
$player = $e->getPlayer();
	foreach($this->getServer()->getOnlinePlayers() as $ps){
		if($player->isOp()){
			$ps->sendMessage(TextFormat::BLUE . "An Op Joined The Server");
		}else{
			$ps->sendMessage(TextFormat::GREEN . "[+] $name");
		}
	}
}

public function onQuit(PlayerQuitEvent $e){
$name = $e->getPlayer()->getName();
	foreach($this->getServer()->getOnlinePlayers() as $ps){
		$ps->sendMessage(TextFormat::RED . "[-] $name");
	}
  }
  
public function onCommand(){
}
}

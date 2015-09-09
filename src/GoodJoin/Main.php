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
$name = $e->getPlayer()->getName();
$player = $e->getPlayer();
$Effect = $this->getConfig()->get("Effect"));
$Sound = $this->getConfig()->get("Sound"));
$Particles = $this->getConfig()->get("Particles"));
$Command = $this->getConfig()->get("Command");
$OpJoinMessage = $this->getConfig()->get("OpJoinMessage"));
$JoinMessage = $this->getConfig()->get("JoinMessage"));
foreach($this->getServer()->getOnlinePlayers() as $ps){
  if($player->isOp()){
    $ps->sendMessage($OpJoinMessage." ");
      }
  if($this->getConfig()->get("JoinEffect") == "true"){
    $
      }
  if($this->getConfig()->get("JoinParticles") == "true"){
      }
  if($this->getConfig()->get("JoinCommand") == "true"){
      }
  if($this->getConfig()->get("JoinSound") == "true"){
      }
  if($this->getConfig()->get("MessageAtJoin")){
  $player->sendMessage($JoinMessage." ");
      }
  $player->sendMessage(TextFormat::GREEN . "[+] ".$name);
        }
  }

    
public function OnQuit(PlayerQuitEvent $e){
$name = $e->getPlayer()->getName();
$player->sendMessage(TextFormat::RED . "[-] ".$name);
}
}

public function WorldJoinMessage( $e){
$world = $e->getPlayer()->getLevel()->getName();
$name = $e->getPlayer()->getName();
if($this->getConfig()->get("WorldJoinAndQuit") == "true"){
foreach($this->getServer()->getOnlinePlayers() as $ps){
  $ps->sendMessage(TextFormat::GREEN . .$world." [+] ".$name);
     }
  }
}

public function WorldQuitEvent( $e){
$world = $e->getPlayer()->getLevel()->getName();
$name = $e->getPlayer()->getName();
if($this->getConfig()->get("WorldJoinAndQuit") == "true"){
foreach($this->getServer()->getOnlinePlayers() as $ps){
  $ps->sendMessage(TextFormat::RED . .$world." [-] ".$name);
    }
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

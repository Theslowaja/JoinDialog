<?php

namespace Theslowaja\JoinDialog;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\command\{
    Command,
    CommandLostener
};

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\utils\Config;

use pocketmine\plugin\PluginBase;

use NpcDialog\NpcDialog;
use NpcDialog\Button;
use NpcDialog\DialogForm;
use NpcDialog\DialogFormStore;
use NpcDialog\PacketListener;

class Loader extends PluginBase implements Listener{
   
    public function onEnable():void{
       NpcDialog::register($this); 
    }
  
  
  
    public function onJoin(PlayerJoinEvent $ev){
        $this->dialog();
    }
  
  
  
    public function Dialog(){
        $form = new DialogForm("This is the dialog text");
 
        $form->addButton(new Button("Test", function(Player $player) {
            $player->sendMessage("Hi!!");
        }));

        $form->setCloseListener(function(Player $player) {
            $player->sendMessage("You closed the form!");
        });

         $form->pairWithEntity($entity);
    }
}

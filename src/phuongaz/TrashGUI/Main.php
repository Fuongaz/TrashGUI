<?php

namespace phuongaz\TrashGUI;

use pocketmine\{Server, Player};
use pocketmine\plugin\PluginBase;
use pocketmine\command\{Command, CommandSender};
use phuongaz\TrashGUI\Inventory;
use muqsit\invmenu\{InvMenu, InvMenuHandler};

class Main extends PluginBase{

	public function onEnable():void{
		if(!InvMenuHandler::isRegistered()){
            InvMenuHandler::register($this);
        }
	}

	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool
	{
		if($sender instanceof Player){
	    	if(strtolower($cmd->getName()) == "trash")
		    {
		    	$gui = new Inventory($sender);
		    	$gui->send($sender);
		    }			
		}
		return true;
	}
}


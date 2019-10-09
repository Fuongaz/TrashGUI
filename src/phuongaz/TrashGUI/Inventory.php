<?php

namespace phuongaz\TrashGUI;

use phuongaz\TrashGUI\Main;
use pocketmine\Server;
use pocketmine\Player;
use muqsit\invmenu\{InvMenu, InvMenuHandler};
use pocketmine\item\Item;
use pocketmine\inventory\transaction\action\SlotChangeAction;
Class Inventory{

	private $player;

	public function __construct($player)
	{
		$this->player = $player;

	}

	public function send($player)
	{    // ->readonly()
        $menu = InvMenu::create(InvMenu::TYPE_CHEST);     
        $menu->setName("Inventory Trash")
        ->setListener([$this, "Listener"])
        ->send($player);

	}

	public function Listener(Player $player, Item $itemClicked):bool
	{
		return true;
	}
}
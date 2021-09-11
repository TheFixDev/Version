<?php

namespace TheFixDev\Version\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class main extends PluginBase{
    public function onEnable()
    {
        Server::getInstance()->getCommandMap()->unregister(Server::getInstance()->getCommandMap()->getCommand("version"));
        $this->getLogger()->notice("The Command /version and /about have been deleted");
    }
    
    
}

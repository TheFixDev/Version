<?php

namespace TheFixDev\Version;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class main extends PluginBase{
    public function onEnable(): void
    {
        Server::getInstance()->getCommandMap()->unregister(Server::getInstance()->getCommandMap()->getCommand("version"));
    }
}

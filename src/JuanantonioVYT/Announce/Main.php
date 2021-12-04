<?php

namespace JuanantonioVYT\Announce;

use pocketmine\plugin\PluginBase;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\event\Listener;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;


class Main extends PluginBase implements Listener {

    public function onEnable() : void {
        
    }
    
    public function onLoad() : void {
        
    }
    
    public function formatText(Player $player, string $text): string {
        
        $text = str_replace(['&0', '&1', '&2', '&3', '&4', '&5', '&6', '&7', '&8', '&9', '&a', '&b', '&c', '&d', '&e', '&f', '&k', '&l', '&m', '&n', '&o', '&r'], [TextFormat::BLACK, TextFormat::DARK_BLUE, TextFormat::DARK_GREEN, TextFormat::DARK_AQUA, TextFormat::DARK_RED, TextFormat::DARK_PURPLE, TextFormat::GOLD, TextFormat::GRAY, TextFormat::DARK_GRAY, TextFormat::BLUE, TextFormat::GREEN, TextFormat::AQUA, TextFormat::RED, TextFormat::LIGHT_PURPLE, TextFormat::YELLOW, TextFormat::WHITE, TextFormat::OBFUSCATED, TextFormat::BOLD, TextFormat::STRIKETHROUGH, TextFormat::UNDERLINE, TextFormat::ITALIC, TextFormat::RESET], $text);

        return $text;
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
      switch (strtolower($cmd->getName())) {
      case "announce":
             if(isset($args[0])){ 
                $this->getServer()->broadcastMessage($this->getConfig()->get("announce") . implode(" ", $args));
             }
        }
        return true;
    }
}
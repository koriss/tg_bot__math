<?php

namespace App\Services\Chats\Telegram\Commands;

use Telegram\Bot\Commands\Command;

/**
 * Class StartCommand.
 */
final class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected string $name = 'start';

    /**
     * @var array Command Aliases
     */
    protected array $aliases = ['listcommands'];

    /**
     * @var string Command Description
     */
    protected string $description = 'Get a list of available commands';

    /**
     * {@inheritdoc}
     */
    public function handle(): void
    {
        
        \Illuminate\Support\Facades\Log::info(PHP_EOL.PHP_EOL.PHP_EOL);
\Illuminate\Support\Facades\Log::info(
    '==============================================================='.
    PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL
);

$this->replyWithMessage([
    'text' => 'Hey, there! Welcome to our bot!',
]);


        // $commands = $this->telegram->getCommandBus()->getCommands();

//         $text = '';
//         foreach ($commands as $name => $handler) {
//             $text .= sprintf('/%s - %s'.PHP_EOL, $name, $handler->getDescription());
//         }


// \Illuminate\Support\Facades\Log::info($text);

//         $this->replyWithMessage(['text' => $text]);
    }
}

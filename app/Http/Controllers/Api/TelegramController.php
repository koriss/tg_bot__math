<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Telegram\AbstractQuery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Telegram\Bot\Events\UpdateEvent;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{   
    public function handle(Request $request): JsonResponse
    {
        try {
            // Processing buttons
            Telegram::on('callback_query.text', function (UpdateEvent $event) {
                $action = AbstractQuery::match($event->update->callbackQuery->data);

                if ($action) {
                    $action = new $action();
                    $action->handle($event);

                    return null;
                }

                return $event->telegram->answerCallbackQuery([
                    'callback_query_id' => $event->update->callbackQuery->id,
                    'text' => 'Unfortunately, there is no matched action to respond to this callback',
                ]);
            });

            Telegram::commandsHandler(true);

            return response()
                ->json([
                    'status' => true,
                    'error' => null
                ]);
        } catch (\Throwable $exception) {
            return response()
                ->json([
                    'status' => false,
                    'error' => $exception->getMessage()
                ]);
        }
    }
}

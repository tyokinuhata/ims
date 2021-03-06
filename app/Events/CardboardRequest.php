<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

/**
 * ダンボールが申請・発送された際に発火するイベント(販売者・管理者それぞれで発火)
 *
 * Class CardboardRequest
 * @package App\Events
 */
class CardboardRequest
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var
     */
    public $type;

    /**
     * @var
     */
    public $to_user_id;

    /**
     * @var
     */
    public $cardboard_id;

    /**
     * Create a new event instance.
     *
     * CardboardRequest constructor.
     * @param $type
     * @param $to_user_id
     * @param $cardboard_id
     */
    public function __construct($type, $to_user_id, $cardboard_id)
    {
        $this->type = $type;
        $this->to_user_id = $to_user_id;
        $this->cardboard_id = $cardboard_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

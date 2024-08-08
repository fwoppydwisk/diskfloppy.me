<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class DiscordStatus extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Returns current Discord presence from Lanyard API
     * @return array|mixed
     */
    public function getDiscordPresence(): mixed {
        // If it's already cached just return that
        if (Cache::has('discord_presence')) {
            return Cache::get('discord_presence');
        }

        $response = Http::get('https://api.lanyard.rest/v1/users/' . Config::get('services.lanyard.user_id'));
        $data = $response->json();
        $presence = $data["data"];
        Cache::put('discord_presence', $presence, now()->addSeconds(60));
        return $presence;
    }

    public function getOnlineStatus(): array {
        $presence = $this->getDiscordPresence();
        return match ($presence["discord_status"]) {
            "online", "dnd" => [
                "text" => "online",
                "color" => "#02c83a"
            ],
            "idle" => [
                "text" => "away",
                "color" => "#d77c20"
            ],
            default => [
                "text" => "offline",
                "color" => "#ca3329"
            ],
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.discord-status', [
            'status' => $this->getOnlineStatus(),
        ]);
    }
}

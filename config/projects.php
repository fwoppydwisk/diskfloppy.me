<?php
use App\Models\Project;
use App\Models\ProjectCategory;

return [
    new ProjectCategory("Websites", [
        new Project(
            "diskfloppy.me",
            "The website you're looking at right now!",
            "https://github.com/floppydisk05/diskfloppy.me",
            [ "PHP", "CSS" ]),
        new Project(
            "NetDrivers",
            "Driver downloads website.",
            "https://github.com/floppydisk05/NetDrivers",
            [ "Ruby", "CSS" ])
    ]),
    new ProjectCategory("APIs", [
        new Project(
            "trivia-api",
            "API to serve random trivia questions.",
            "https://github.com/floppydisk05/trivia-api",
            [ "JavaScript" ]
        )
    ]),
    new ProjectCategory("Discord Bots", [
        new Project(
            "PlexBot",
            "A basic bot to play music from the configured Plex server in a Discord voice channel.",
            "https://github.com/floppydisk05/PlexBot",
            [ "Python" ]
        )
    ]),
    new ProjectCategory("Abandoned Projects", [
        new Project(
            "website-cf",
            "Rewrite of my personal website in Adobe ColdFusion.",
            "https://github.com/floppydisk05/website-cf",
            [ "Adobe ColdFusion" ]
        ),
        new Project(
            "WinBotJDA",
            "Rewrite of CamK06's WinBot using Java and DiscordJDA.",
            "https://github.com/floppydisk05/WinBotJDA",
            [ "Java" ]
        ),
        new Project(
            "delayed-eject",
            "Scripts which eject the cd drive a lot to annoy nick.",
            "https://github.com/floppydisk05/delayed-eject",
            [ "Shell", "C" ]
        ),
        new Project(
            "php-sound",
            "Plays a specified sound file or files on the web server when a php page is loaded.",
            "https://github.com/floppydisk05/php-sound",
            [ "PHP", "Shell" ]
        )
    ])
];

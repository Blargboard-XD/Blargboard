<?php

$c1 = ircColor(Settings::pluginGet("color1"));
$c2 = ircColor(Settings::pluginGet("color2"));

$link = getServerURLNoSlash().actionLink("profile", $user["id"], "", "_");

	ircReport("\003".$c2."New user: \003$c1"
		.ircUserColor($user["name"], $user['sex'], 0)
		."\003$c2 -- "
		.$link
		);

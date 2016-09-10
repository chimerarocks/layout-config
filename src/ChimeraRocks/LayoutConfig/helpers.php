<?php

use ChimeraRocks\LayoutConfig\Models\AppConfig;

function app_asset($path, $secure = null)
{
	if (!file_exists(public_path($path))) {
		$appConfig = app(AppConfig::class);
		$frontLayout = $appConfig->frontLayout;
		$path = ltrim($path, '/');
		$path = "$frontLayout/$path";
	} 
	return asset($path, $secure);
}
<?php
protected $routeMiddleware = [
    // ..
    'sentry.auth' => \Sentinel\Middleware\SentryAuth::class,
    'sentry.admin' => \Sentinel\Middleware\SentryAdminAccess::class,
    'sentry.member' => \Sentinel\Middleware\SentryMember::class,
    'sentry.guest' => \Sentinel\Middleware\SentryGuest::class,
];


?>
<?php

$actions_path = dirname(dirname(__DIR__)) . '/actions';

// Override the following actions in order to prevent the notification emails from being sent
elgg_register_action('comments/add', "$actions_path/comments/add.php");
elgg_register_action("messages/send", "$actions_path/messages/send.php");
elgg_register_action("likes/add", "$actions_path/likes/add.php");

// Don't want to include the title of the blog in the URL in case we send urls out via email, so override the default.
elgg_register_entity_url_handler('object', 'blog', 'missions_blog_url_handler');



elgg_unregister_page_handler('activity');
elgg_unregister_event_handler('create', 'object', 'object_notifications');


elgg_extend_view('page/elements/head', 'mobile/viewport');
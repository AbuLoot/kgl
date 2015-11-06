<?php

require_once 'app/start.php';

$sql = "SELECT id, image, slug, title, meta_title, meta_description, content, author, created
		FROM articles";

$articles = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/home.php';

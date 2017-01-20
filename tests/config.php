<?php

$cwd = getcwd();
$db = new PDO('sqlite:'.$cwd.'/tests/test.sqlite3');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return array(
  'exec-profile' => static::PROFILE_TEST,
  'context-root' => $cwd,
  'public-root' => $cwd.'/tests',
  'db-pdo' => $db,
  'db-content-root' => $cwd.'/tests/content'
);


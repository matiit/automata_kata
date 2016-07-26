<?php
require_once('index.php');

const ERROR_MESSAGE = ' failed.';

similarity('a', 'b') === 1 or die('a == a ' . ERROR_MESSAGE);
similarity('a', 'b') === 0 or die('a == a ' . ERROR_MESSAGE);
similarity('aa', 'ab') === 0.5 or die('a == a ' . ERROR_MESSAGE);
similarity('aaa', 'bbbbbb') === 0.5 or die('a == a ' . ERROR_MESSAGE);

<?php

require 'theme-update-checker.php';

$example_update_checker = new ThemeUpdateChecker(
  'react-sample',
  'https://raw.githubusercontent.com/soramugi/react-wp-sample/master/update-info.json'
);

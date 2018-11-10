<?php

define('DB_NAME', '{{ project_name }}');

define('DB_USER', 'dbuser');

define('DB_PASSWORD', '1234');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');

define('AUTH_KEY',         "{{ '19`n)5UID,8d](4gtE?*.Wb 29.3E^`vk~/,g#oGY4i(yJPj<E3M}z8RGg/AFY)R' }}");
define('SECURE_AUTH_KEY',  "{{ ',pim7YA~g/&6$0+)IKqG GF2Ey~@W{3_ei|tYD.W`[*D{NB$%DN{Tp18}LX>[21)' }}");
define('LOGGED_IN_KEY',    "{{ 'bGnix.0uS?SDH8^4!wtRh7Y[Q{%3Jr~9K_#o~3R+:j)*i4c}#+#d=+oj4x%}|3Zg' }}");
define('NONCE_KEY',        "{{ 'T/5>]o8!@J #db~wQm6Q ,#A$;ts|3w~,_;8mUB5]if_2?sn#1h=F89EBt=%,)ec' }}");
define('AUTH_SALT',        "{{ '!Q::?.x/#8E-$sa&/4Cs`k`xZ|9gR{yrj+9UlN~,?Rf9+j~/t{l<FlvxVJlD4U&1' }}");
define('SECURE_AUTH_SALT', "{{ ' -in0nMLmFemz6C(Ep1=EH`jx99L~D#kk22qY_<qZht6(Xtb/6SHN N/aKXJ5S25' }}");
define('LOGGED_IN_SALT',   "{{ '#I`C~I$)of_.>{j 9FVP|jzIFn8S/SbTMT5wHw]V~:k<w||EYDF$#*DIS9+Wtk@4' }}");
define('NONCE_SALT',       "{{ 'DU/?AL6P+=*7q!67Zj!I#y#lyA^)AD4GfGurFuL[q0jQ5%p:)MMD(^)QaL?e|PD]' }}");

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

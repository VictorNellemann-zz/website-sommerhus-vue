<?php

require './core/database/connection.php';
require './core/database/querybuilder.php';
require './config.php';

return new QueryBuilder
(
    Connection::make()
);
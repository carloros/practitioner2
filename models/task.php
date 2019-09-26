<?php

$query = new QueryBuilder(Connection::make());
$results = $query->selectAll('Task');

$task = $results[0];

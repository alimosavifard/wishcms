<?php



function content_install() {
    $sql = <<<MySQL_QUERY
        CREATE TABLE IF NOT EXISTS testDB (
            title	VARCHAR(150),
            bodytext	TEXT,
            created	VARCHAR(100)
    )
    MySQL_QUERY;

    return mysql_query($sql);
}


?>
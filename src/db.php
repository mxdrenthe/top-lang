<?php

class DB
{
    static function getConnection()
    {
        return new SQLite3('/var/top-lang-main-09-11.db');
    }
}

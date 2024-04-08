<?php

namespace App\Models;

use App\Core\Db;

class FeedBack
{
    public static function addRecord($record): bool
    {
        $result = Db::getInstance()->query(
            'INSERT INTO feedback_entries (name, address, phone, email) 
            VALUES (:name, :address, :phone, :email)',
            $record
        );
        return boolval($result);
    }
}
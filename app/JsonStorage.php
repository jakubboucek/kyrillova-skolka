<?php
declare (strict_types = 1);

namespace App;

use Exception;

class JsonStorage
{
    public static function read(string $filename): array
    {
        $items = json_decode(FileStorage::read($filename), true, 512, JSON_THROW_ON_ERROR);
        if (is_array($items)) {
            return $items;
        }
        throw new Exception("Chyba: to není pole, sorry");
    }
}

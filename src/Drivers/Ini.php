<?php

namespace Slexx\Config\Drivers;

use NoczCore\Ini\IniReader;
use NoczCore\Ini\IniWriter;
use Slexx\Config\ConfigDriverInterface;

class Ini implements ConfigDriverInterface
{
    /**
     * @param string $file
     * @return array
     */
    public static function parse($file)
    {
        return (new IniReader())->readFile($file)->toArray();
    }

    /**
     * @param string $file
     * @param array $data
     * @return void
     */
    public static function write($file, $data)
    {
        (new IniWriter())->writeToFile($file, $data);
    }
}

<?php

namespace App\One;

use Exception;

/**
 * Load a file and store each line in an array
 *
 * @author Phil Burton <phil@pgburton.com>
 */
class FileToArray
{
    /**
     * File in array format
     *
     * @var string[]
     */
    protected $array = [];

    /**
     * Load file and store contents in array
     *
     * @param string $filename
     * @author Phil Burton <phil@pgburton.com>
     */
    public function __construct(string $filename)
    {
        if (!is_readable($filename)) {
            throw new Exception('Failed to load filename `' . $filename . '`');
        }

        $this->array = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    /**
     * Return array
     *
     * @return array
     * @author Phil Burton <phil@pgburton.com>
     */
    public function toArray(): array
    {
        return $this->array;
    }
}

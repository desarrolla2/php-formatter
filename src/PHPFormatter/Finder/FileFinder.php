<?php

/**
 * This file is part of the php-formatter package
 *
 * Copyright (c) 2014 Marc Morera
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */
 
namespace PHPFormatter\Finder;

use Iterator;
use Symfony\Component\Finder\Finder;

/**
 * Class FileFinder
 */
class FileFinder
{
    /**
     * Find all php files by path
     *
     * @param string $path Path
     *
     * @return Finder
     */
    public function findPHPFilesByPath($path)
    {
        $finder = new Finder();
        $finder
            ->files()
            ->in($path)
            ->name('*.php');

        return $finder;
    }
}
 
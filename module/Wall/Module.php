<?php

/*
 * configuration class used by ModuleManager to get extra information about our modules.
 */

namespace Wall;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        
    }
}
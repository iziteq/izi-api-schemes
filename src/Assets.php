<?php

/**
 * @file
 * Contains \Iziteq\IziApiSchemes\Assets.
 */

namespace Iziteq\IziApiSchemes;

/**
 * Provides asset management.
 */
class Assets {

    /**
     * Returns the path to the JSON schema directory;
     */
    public static function getJsonSchemaPath() {
        return dirname(__DIR__);
    }

}

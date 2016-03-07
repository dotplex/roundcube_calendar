<?php

namespace OldSabre\DAV\Auth\Backend;

/**
 * This is the base class for any authentication object.
 *
 * @copyright Copyright (C) 2007-2015 fruux GmbH (https://fruux.com/).
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/ Modified BSD License
 */
interface BackendInterface {

    /**
     * Authenticates the user based on the current request.
     *
     * If authentication is successful, true must be returned.
     * If authentication fails, an exception must be thrown.
     *
     * @param \OldSabre\DAV\Server $server
     * @param string $realm
     * @return bool
     */
    function authenticate(\OldSabre\DAV\Server $server,$realm);

    /**
     * Returns information about the currently logged in username.
     *
     * If nobody is currently logged in, this method should return null.
     *
     * @return string|null
     */
    function getCurrentUser();

}


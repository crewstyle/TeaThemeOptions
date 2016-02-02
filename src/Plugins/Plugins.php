<?php

namespace crewstyle\TeaThemeOptions\Plugins;

use crewstyle\TeaThemeOptions\TeaThemeOptions;
use crewstyle\TeaThemeOptions\Plugins\Action\Action;
//use crewstyle\TeaThemeOptions\Plugins\Network\Network;
use crewstyle\TeaThemeOptions\Plugins\Search\Search;

/**
 * TTO PLUGINS
 */

if (!defined('TTO_CONTEXT')) {
    die('You are not authorized to directly access to this page');
}


//----------------------------------------------------------------------------//

/**
 * TTO Plugins
 *
 * To get all plugins methods.
 *
 * @package Tea Theme Options
 * @subpackage Plugins\Plugins
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 3.3.0
 *
 */
class Plugins
{
    /**
     * @var Network
     */
    protected $network = null;

    /**
     * @var Search
     */
    protected $search = null;

    /**
     * Constructor.
     *
     * @param string $identifier Define the main slug
     * @todo Networks!
     *
     * @since 3.3.0
     */
    public function __construct($identifier)
    {
        //Instanciate Action
        $this->action = new Action($identifier);

        //Instanciate Network
        //$this->network = new NetworkPlugin();
        $this->network = null;

        //Instanciate Search
        $this->search = new Search();
    }

    /**
     * Return Network plugin.
     *
     * @return Network $network
     *
     * @since 3.3.0
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Return Search plugin.
     *
     * @return Search $search
     *
     * @since 3.3.0
     */
    public function getSearch()
    {
        return $this->search;
    }
}

<?PHP
/**
 * Base class for patTemplate output cache
 *
 * $Id: OutputCache.php 1878 2008-01-25 21:26:29Z datahell $
 *
 * An output cache is used to cache the data before
 * the template has been read.
 *
 * It stores the HTML (or any other output) that is
 * generated to increase performance.
 *
 * This is not related to a template cache!
 *
 * @package		patTemplate
 * @subpackage	Caches
 * @author		Stephan Schmidt <schst@php.net>
 */

/**
 * Base class for patTemplate output cache
 *
 * $Id: OutputCache.php 1878 2008-01-25 21:26:29Z datahell $
 *
 * An output cache is used to cache the data before
 * the template has been read.
 *
 * It stores the HTML (or any other output) that is
 * generated to increase performance.
 *
 * This is not related to a template cache!
 *
 * @abstract
 * @package		patTemplate
 * @subpackage	Caches
 * @author		Stephan Schmidt <schst@php.net>
 */
class patTemplate_OutputCache extends patTemplate_Module
{
}
?>
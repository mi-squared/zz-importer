<?php
/**
 * Bootstrap custom ZZ Importer module.
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Ken Chapple <ken@mi-squared.com>
 * @copyright Copyright (c) 2021 Ken Chapple <ken@mi-squared.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

use Mi2\Import\Events\ImportBootEvent;
use Mi2\Import\Events\RegisterServices;

function oe_import_register_zz(RegisterServices $event)
{
    $importerService = new \Mi2\NewLeafImport\NewLeafImporter();
    $event->getManager()->register($importerService);
    return $event;
}

// Listen for the importer register event so we can dynamically add our importer
$eventDispatcher = $GLOBALS["kernel"]->getEventDispatcher();
$eventDispatcher->addListener(RegisterServices::REGISTER, 'oe_import_register_zz');

// Tell the system the importer is done initializing
$importBootEvent = new ImportBootEvent('zz-importer');
$importBootEvent = $GLOBALS["kernel"]->getEventDispatcher()->dispatch(ImportBootEvent::IMPORT_BOOTED, $importBootEvent, 10);


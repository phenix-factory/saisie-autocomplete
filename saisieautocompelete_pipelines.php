<?php
/**
 * Utilisations de pipelines par Saisie autocomplete
 *
 * @plugin     Saisie autocomplete
 * @copyright  2014
 * @author     Phenix
 * @licence    GNU/GPL
 * @package    SPIP\Saisieautocompelete\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

// On va chercher l'autocomplete de jquery_UI
function saisieautocompelete_jqueryui_plugins($scripts) {
    $scripts[] = "jquery.ui.autocomplete";
    return $scripts;
}
<?php

$callingurl = strtolower($_SERVER['REQUEST_URI']); //get the calling url
 
 
if ( strpos( $callingurl, 'capoda2') ) {
        require_once( 'LocalSettings_capoda2.php' );
}
else if ( strpos( $callingurl, 'moelc') ) {
        require_once( 'LocalSettings_moelc.php' );
}
else {
        require_once( 'LocalSettings_studio.php' );
}

#######################
###SemanticMediaWiki###
#######################
include_once("$IP/extensions/SemanticMediaWiki/includes/SMW_Settings.php");
enableSemantics('studio.steren.org');

###################
###SemanticForms###
###################
include_once("$IP/extensions/SemanticForms/includes/SF_Settings.php");

###########################
###SemanticResultFormats###
###########################
require_once("$IP/extensions/SemanticResultFormats/SRF_Settings.php");

#######################
###SemanticDrilldown###
#######################
include_once("$IP/extensions/SemanticDrilldown/includes/SD_Settings.php");

?>

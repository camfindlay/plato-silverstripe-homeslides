<?php
/**
 * Extends init() to add extra requirements
 *
 * @package plato-silverstripe-homeslides
 */
class HomePage_ControllerExtension extends DataExtension
{
    /**
     * Inject requirements after main init
     */
    public function onAfterInit()
    {
        Requirements::css(HOMESLIDES_DIR . '/css/homeslides.css');
        Requirements::javascript(FRAMEWORK_DIR . '/thirdparty/jquery/jquery.js');
        Requirements::javascript(HOMESLIDES_DIR . '/js/jquery.cycle2.min.js');
        Requirements::javascript(HOMESLIDES_DIR . '/js/jquery.cycle2.swipe.min.js');
    }

}

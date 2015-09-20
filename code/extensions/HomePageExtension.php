<?php
/**
 * Pushed a gridifeld into the home page of a site
 * which lets you manage home slides.
 *
 * @package plato-silverstripe-homeslides
 */
class HomePageExtension extends DataExtension
{
    /**
	 * @var array
	 */
    private static $has_many = array(
		"HomeSlides" => "HomeSlide"
	);

    /**
     * @return FieldList
     */
    public function updateCMSFields(FieldList $fields)
    {
        $slidesConfig = new GridFieldConfig_RelationEditor();
        if(class_exists('GridFieldSortableRows')) $slidesConfig->addComponent(new GridFieldSortableRows('Sort'));

		$slidesGrid = GridField::create('HomeSlides', 'HomeSlides', $this->owner->HomeSlides(), $slidesConfig);
		$fields->addFieldToTab('Root.Slides', $slidesGrid);

        return $fields;
    }

    /**
     * @return String
     * @config()
     */
    public function getSlideEffect() {
        return ($this->owner->config()->SlideEffect ? $this->owner->config()->SlideEffect : "fade");
    }

    /**
     * @return Int
     * @config()
     */
    public function getSlideSpeed() {
        return ($this->owner->config()->SlideSpeed ? $this->owner->config()->SlideSpeed : 500);
    }

    /**
     * @return Int
     * @config()
     */
    public function getSlideTimeout() {
        return ($this->owner->config()->SlideTimeout ? $this->owner->config()->SlideTimeout : 4000);
    }

}

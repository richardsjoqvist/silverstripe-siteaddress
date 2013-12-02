<?php
/**
 * Extend SiteConfig with address fields
 */
class SiteConfigAddress extends DataExtension {

	/**
	 * Add fields
	 */
    private static $db = array(
		'Company'		=> 'Text',
		'Street'		=> 'Text',
		'Zip'			=> 'Text',
		'City'			=> 'Text',
		'Country'		=> 'Text',
		'Box'			=> 'Text',
		'Email'			=> 'Text',
		'Phone'			=> 'Text',
		'Mobile'		=> 'Text',
		'Fax'			=> 'Text',
	);
 
	/**
	 * Update cms fields
	 *
	 * @param FieldList $fields
	 */
	public function updateCMSFields(FieldList $fields)
	{
		$fields->addFieldToTab("Root.Main", new TextField('Company',	_t('SiteConfigAddress.COMPANY')));
		$fields->addFieldToTab("Root.Main", new TextField('Street',		_t('SiteConfigAddress.STREET')));
		$fields->addFieldToTab("Root.Main", new TextField('Zip',		_t('SiteConfigAddress.ZIP')));
		$fields->addFieldToTab("Root.Main", new TextField('City',		_t('SiteConfigAddress.CITY')));
		$fields->addFieldToTab("Root.Main", new TextField('Country',	_t('SiteConfigAddress.COUNTRY')));
		$fields->addFieldToTab("Root.Main", new TextField('Box',		_t('SiteConfigAddress.BOX')));
		$fields->addFieldToTab("Root.Main", new EmailField('Email',		_t('SiteConfigAddress.EMAIL')));
		$fields->addFieldToTab("Root.Main", new TextField('Phone',		_t('SiteConfigAddress.PHONE')));
		$fields->addFieldToTab("Root.Main", new TextField('Mobile',		_t('SiteConfigAddress.MOBILE')));
		$fields->addFieldToTab("Root.Main", new TextField('Fax',		_t('SiteConfigAddress.FAX')));
	}
	
	/**
	 * Output address as vcard
	 *
	 * @return string
	 *   Return vcard html
	 */
	public function vCard()
	{
		return	'<div class="vcard">' .
				( !empty($this->owner->Company) ? '<div class="org">' . $this->owner->Company . '</div>' : '' ) .
				'<div class="adr">' .
				( !empty($this->owner->Street) ? '<div class="street-address">' . $this->owner->Street . ', </div>' : '' ) .
				( !empty($this->owner->Zip) ? '<span class="postal-code">' . $this->owner->Zip . '</span>' : '' ) .
				( !empty($this->owner->City) ? '<span class="locality">' . $this->owner->City . ', </span>' : '' ) .
				( !empty($this->owner->Country) ? '<span class="country-name">' . $this->owner->Country . '</span>' : '' ) .
				( !empty($this->owner->Box) ? '<span class="po-box">' . $this->owner->Box . '</span>' : '' ) .
				'</div>' .
				( !empty($this->owner->Email) ? '<a class="email" href="mailto:' . $this->owner->Email . '">' . $this->owner->Email . '</a>' : '' ) .
				( !empty($this->owner->Phone) ? '<div class="tel">' . $this->owner->Phone . '</div>' : '' ) .
				( !empty($this->owner->Mobile) ? '<div class="mobile">' . $this->owner->Mobile . '</div>' : '' ) .
				( !empty($this->owner->Fax) ? '<div class="fax">' . $this->owner->Fax . '</div>' : '' ) .
				'</div>';
	}
	
}
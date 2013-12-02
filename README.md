## Company address SilverStripe module

This is a SilverStripe module that adds a set of extra fields to the main settings page in order to configure a site-wide company address that can be displayed on all pages of the site.

## Requirements

* SilverStripe 3.1

## Installation

Drop the module into your SilverStripe project and run /dev/build

## Usage

The address data can be inserted into a template in two different ways; either as separate fields:

	<div class="vcard">
		<div class="org">$SiteConfig.Company</div>
		<div class="adr">
			<div class="street-address">$SiteConfig.Street, </div>
			<span class="postal-code">$SiteConfig.Zip</span>
			<span class="locality">$SiteConfig.City, </span>
			<span class="country-name">$SiteConfig.Country</span>
			<span class="po-box">$SiteConfig.Box</span>
		</div>
		<a class="email" href="mailto:$SiteConfig.Email">$SiteConfig.Email</a>
		<div class="tel">$SiteConfig.Phone</div>
		<div class="mobile">$SiteConfig.Mobile</div>
		<div class="fax">$SiteConfig.Fax</div>
	</div>

or as a pre-compiled vcard:

	$SiteConfig.vCard

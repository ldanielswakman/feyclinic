<?php if(!defined('KIRBY')) exit ?>

title: Home-section
pages: false
files: true
  max: 1
fields:
	title:
		label: >
			Titel <i>(blijft verborgen)</i>
	text:
		label: Tekst
		type: text
	more:
		label: >
			Link naar pagina <i>(optioneel)</i>
		type: structure
		fields:
			link_page:
				type: select
				options: pages
			link_text:
				type: text
				default: Meer info
				icon: font
	link:
		label: >
			Link naar pagina <i>(optioneel)</i>
		type: structure
		fields:
			link_page:
				type: select
				options: pages
			link_text:
				type: text
				default: Meer info
				icon: font
<?php if(!defined('KIRBY')) exit ?>

title: News
pages: false
files: false
fields:
	title:
		label: >
			Nieuws
	items:
		label: >
			Nieuwsberichten
		type: structure
		fields:
			title:
				label: Titel
				type: text
				icon: font
			message:
				label: >
					Bericht <i>(optioneel)</i>
				type: text
				icon: font
			date:
				label: Datum
				type: date
		entry: >
      <h1 style="font-size: 1.3em; margin-bottom: 0.5em;">{{title}}</h1>
      {{message}}<br />
      <div style="color: #ccc; margin-top: 0.5em;">{{date}}</div>
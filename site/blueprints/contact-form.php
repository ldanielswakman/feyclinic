<?php if(!defined('KIRBY')) exit ?>

title: Contactformulier
pages: false
files: false
fields:
	info: 
		type: info
		text: >
			<i>Dit is geen 'echte' pagina, maar enkel bedoeld om het contactformulier te configureren. Houd deze pagina dan ook verborgen.</i>
	title:
		label: Contactformulier
	items:
		label: >
			Velden
		type: structure
		fields:
			label:
				label: Titel
				type: text
				icon: font
			placeholder:
				label: Voorbeeld-tekst
				type: text
				icon: font
			type:
				label: Type
				type: select
				options:
					textarea: Bericht
					text: Naam
					email: Email
		entry: >
      <h3>{{label}}</h3>
      <input placeholder="{{placeholder}}" type="{{type}}" style="margin: 5px 0; padding: 10px; width: 75%;" readonly="readonly"><br />
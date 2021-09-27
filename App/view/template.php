<?php
	foreach ($products as $key => $ArrValue) {
		$content[$key] = "<div class=\"card\">
			<p>{$ArrValue['id']}</p>
			<p>{$ArrValue['name']}</p>
			<p>{$ArrValue['cost']}</p>
		</div>";
	}
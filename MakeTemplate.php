<?php
	class MakeTemplate {
		public function __construct($template, $products, $layout) {
			require($template);
			require($layout);
		}
	}
<?php
/*
 *
 * PageData
 *
 */

class PageData {
	private $titles;
	private $descriptions;
	private $types;

	function PageData () {
		$this->initMetaData();
	}

    public function getSiteName () {
		return $this->siteName;
	}

	public function getTitle ($pageID) {
		return $this->titles[$pageID];
	}

	public function getDescription ($pageID) {
		return $this->descriptions[$pageID];
	}

	public function getType ($pageID) {
		return $this->types[$pageID];
	}

	public function getCss ($pageID) {
		$cssArray = $this->css;
		$cssText = '';

		// if (isPCDevice()) $cssArray = $this->css;
		// else $cssArray = $this->cssSp;

		if (isset($cssArray[$pageID])) {
			if (is_array($cssArray[$pageID])) {
				$count = count($cssArray[$pageID]);

				for($i=0; $i<$count; $i++) {
					$cssText .= '<link rel="stylesheet" href="' . $cssArray[$pageID][$i] . '">' . "\n";
				}
			}
			else {
				$cssText .= '<link rel="stylesheet" href="' . $cssArray[$pageID] . '">' . "\n";
			}

			return $cssText;
		}
	}

	public function getJS ($pageID) {
		$jsArray = $this->js;
		$jsText = '';

		// if (isPCDevice()) $jsArray = $this->js;
		// else $jsArray = $this->jsSp;

		if (isset($jsArray[$pageID])) {
			if(is_array($jsArray[$pageID])) {
				$count = count($jsArray[$pageID]);

				for($i=0; $i<$count; $i++){
					$jsText .= '<script src="' . $jsArray[$pageID][$i] . '"></script>' . "\n";
				}
			}
			else {
				$jsText .= '<script src="' . $jsArray[$pageID] . '"></script>' . "\n";
			}

			return $jsText;
		}
	}

	private function initMetaData() {

        $this->siteName = 'title';

		$this->titles = array(
			'top'             => 'title',
			'error'           => 'error | title'
		);

		$this->descriptions = array(
			'top'             => 'xxx',
            'error'           => 'xxx'
		);

		$this->types = array(
			'top'             => 'website',
			'error'           => 'article'
		);

		$this->css = array(
			// 'top' => array(
			// 		'/assets/js/vendor/slick/slick.css',
			// 		'/assets/js/vendor/slick/slick-theme.css'
			// ),
			// 'recruit' => '/assets/js/vendor/booklet/jquery.booklet.latest.css'
		);

		$this->js = array(
			'top'     => array(
					'/assets/js/app.js',
				)
			// 'recruit' => array(
			// 		'/assets/js/vendor/booklet/jquery.booklet.latest.js',
			// 	),
		);
	}
}

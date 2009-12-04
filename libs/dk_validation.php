<?php
/**
 * Danish Localized Validation class. Handles localized validation for Denmark
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org
 * @package       localized
 * @since         localized 0.1
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class DkValidation {
/**
 * Checks social security numbers for Denmark
 *
 * @param string $check The value to check.
 * @access public
 * @return boolean
 */
	function ssn($check) {
		$pattern = '/\\A\\b[0-9]{6}-[0-9]{4}\\b\\z/i';
		return preg_match($pattern, $check);
	}
}

?>
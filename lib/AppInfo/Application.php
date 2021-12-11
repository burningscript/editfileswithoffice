<?php declare(strict_types=1);

/**
 * FilesOfficeEdit - Edit Files with Microsoft Office
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author BurningScript
 * @copyright 2021
 * @license GNU AGPL version 3 or any later version
 *
 * Modified version of https://apps.nextcloud.com/apps/fileslibreofficeedit
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\FilesOfficeEdit\AppInfo;

use OCP\AppFramework\App;
use OCP\Util;

/**
 * Class Application
 *
 * @package OCA\FilesOfficeEdit\AppInfo
 */
class Application extends App {


	const APP_ID = 'filesofficeedit';

	/**
	 * @param array $params
	 */
	public function __construct(array $params = array()) {
		parent::__construct(self::APP_ID, $params);
		Util::addScript(self::APP_ID, 'script');
	}
}

<?php
/**
 * This file is part of the IcqBot package.
 *
 * (c) Oleg Muraveyko aka Antson
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Antson\IcqBot\Entities;

/**
 * Сообщение было отредактировано
 * @method string get_msgId()
 * @method string get_timestamp()
 * @method string get_text()
 * @method string get_editedTimestamp()
 */
class PayloadEditedMessage extends PayloadMessage
{

}
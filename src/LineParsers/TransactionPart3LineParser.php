<?php

namespace Codelicious\Coda\LineParsers;

use Codelicious\Coda\Lines\TransactionPart3Line;
use Codelicious\Coda\Values\AccountFull;
use Codelicious\Coda\Values\AccountName;
use Codelicious\Coda\Values\LinkCode;
use Codelicious\Coda\Values\Message;
use Codelicious\Coda\Values\NextCode;
use Codelicious\Coda\Values\SequenceNumber;
use Codelicious\Coda\Values\SequenceNumberDetail;

/**
 * @package Codelicious\Coda
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class TransactionPart3LineParser implements LineParserInterface
{
	/**
	 * @param string $codaLine
	 * @return TransactionPart3Line
	 */
	public function parse(string $codaLine)
	{
		return new TransactionPart3Line(
			new SequenceNumber(mb_substr($codaLine, 2, 4)),
			new SequenceNumberDetail(mb_substr($codaLine, 6, 4)),
			new AccountFull(mb_substr($codaLine, 10, 37)),
			new AccountName(mb_substr($codaLine, 47, 35)),
			new Message(mb_substr($codaLine, 82, 43)),
            new NextCode(mb_substr($codaLine, 125, 1)),
            new LinkCode(mb_substr($codaLine, 127, 1))
		);
	}

	public function canAcceptString(string $codaLine)
	{
		return mb_strlen($codaLine) == 128 && mb_substr($codaLine, 0, 2) == "23";
	}
}

<?php

namespace Codelicious\Coda\Lines;

use Codelicious\Coda\Values\Message;
use Codelicious\Coda\Values\SequenceNumber;
use Codelicious\Coda\Values\SequenceNumberDetail;
use Codelicious\Coda\Values\NextCode;
use Codelicious\Coda\Values\LinkCode;

/**
 * @package Codelicious\Coda
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class InformationPart3Line implements LineInterface
{
	/** @var SequenceNumber */
	private $sequenceNumber;
	/** @var SequenceNumberDetail */
	private $sequenceNumberDetail;
	/** @var Message */
	private $message;
    /** @var NextCode */
    private $nextCode;
    /** @var LinkCode */
    private $linkCode;
	
	public function __construct(
		SequenceNumber $sequenceNumber,
		SequenceNumberDetail $sequenceNumberDetail,
		Message $message,
        NextCode $nextCode,
        LinkCode $linkCode )
	{
		
		$this->sequenceNumber = $sequenceNumber;
		$this->sequenceNumberDetail = $sequenceNumberDetail;
		$this->message = $message;
        $this->nextCode = $nextCode;
        $this->linkCode = $linkCode;
	}
	
	public function getType(): LineType
	{
		return new LineType(LineType::InformationPart3);
	}
	
	public function getSequenceNumber(): SequenceNumber
	{
		return $this->sequenceNumber;
	}
	
	public function getSequenceNumberDetail(): SequenceNumberDetail
	{
		return $this->sequenceNumberDetail;
	}
	
	public function getMessage(): Message
	{
		return $this->message;
	}

    public function getNextCode(): NextCode
    {
        return $this->nextCode;
    }

    public function getLinkCode(): LinkCode
    {
        return $this->linkCode;
    }
}
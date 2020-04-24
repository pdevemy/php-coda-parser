<?php

namespace Codelicious\Coda\Lines;

use Codelicious\Coda\Values\Bic;
use Codelicious\Coda\Values\CategoryPurpose;
use Codelicious\Coda\Values\ClientReference;
use Codelicious\Coda\Values\IsoReasonReturnCode;
use Codelicious\Coda\Values\Message;
use Codelicious\Coda\Values\Purpose;
use Codelicious\Coda\Values\SequenceNumber;
use Codelicious\Coda\Values\SequenceNumberDetail;
use Codelicious\Coda\Values\TransactionCodeType;
use Codelicious\Coda\Values\NextCode;
use Codelicious\Coda\Values\LinkCode;

/**
 * @package Codelicious\Coda
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class TransactionPart2Line implements LineInterface
{
	/** @var SequenceNumber */
	private $sequenceNumber;
	/** @var SequenceNumberDetail */
	private $sequenceNumberDetail;
	/** @var Message */
	private $message;
	/** @var ClientReference */
	private $clientReference;
	/** @var Bic */
	private $otherAccountBic;
	/** @var TransactionCodeType */
	private $transactionType;
	/** @var IsoReasonReturnCode */
	private $isoReasonReturnCode;
	/** @var CategoryPurpose */
	private $categoryPurpose;
	/** @var Purpose */
	private $purpose;
    /** @var NextCode */
    private $nextCode;
    /** @var LinkCode */
    private $linkCode;
	
	public function __construct(
		SequenceNumber $sequenceNumber,
		SequenceNumberDetail $sequenceNumberDetail,
		Message $message,
		ClientReference $clientReference,
		Bic $otherAccountBic,
		TransactionCodeType $transactionType,
		IsoReasonReturnCode $isoReasonReturnCode,
		CategoryPurpose $categoryPurpose,
		Purpose $purpose,
        NextCode $nextCode,
        LinkCode $linkCode )
	{
		
		$this->sequenceNumber = $sequenceNumber;
		$this->sequenceNumberDetail = $sequenceNumberDetail;
		$this->message = $message;
		$this->clientReference = $clientReference;
		$this->otherAccountBic = $otherAccountBic;
		$this->transactionType = $transactionType;
		$this->isoReasonReturnCode = $isoReasonReturnCode;
		$this->categoryPurpose = $categoryPurpose;
		$this->purpose = $purpose;
        $this->nextCode = $nextCode;
        $this->linkCode = $linkCode;
	}
	
	public function getType(): LineType
	{
		return new LineType(LineType::TransactionPart2);
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
	
	public function getClientReference(): ClientReference
	{
		return $this->clientReference;
	}
	
	public function getOtherAccountBic(): Bic
	{
		return $this->otherAccountBic;
	}
	
	public function getTransactionType(): TransactionCodeType
	{
		return $this->transactionType;
	}
	
	public function getIsoReasonReturnCode(): IsoReasonReturnCode
	{
		return $this->isoReasonReturnCode;
	}
	
	public function getCategoryPurpose(): CategoryPurpose
	{
		return $this->categoryPurpose;
	}
	
	public function getPurpose(): Purpose
	{
		return $this->purpose;
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
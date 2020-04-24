<?php

namespace Codelicious\Coda\Statements;

use Codelicious\Coda\Values\SepaDirectDebit;
use DateTime;

/**
 * @package Codelicious\Coda
 * @author Wim Verstuyf (wim.verstuyf@codelicious.be)
 * @license http://opensource.org/licenses/GPL-2.0 GPL-2.0
 */
class Transaction
{
    /** @var AccountOtherParty */
    private $account;
    /** @var int */
    private $statementSequence;
    /** @var int */
    private $transactionSequence;
    /** @var int */
    private $transactionDetailSequence;
    /** @var int */
    private $transactionCodeType;
    /** @var DateTime */
    private $transactionDate;
    /** @var DateTime */
    private $valutaDate;
    /** @var float */
    private $amount;
    /** @var string */
    private $message;
    /** @var string */
    private $structuredMessage;
    /** @var SepaDirectDebit|null */
    private $sepaDirectDebit;
    /** @var Transcation[] */
    private $transactionDetail = [];

    /**
     * @param AccountOtherParty $account
     * @param int $statementSequence
     * @param int $transactionSequence
     * @param int $transactionDetailSequence
     * @param int $transactionCodeType
     * @param DateTime $transactionDate
     * @param DateTime $valutaDate
     * @param float $amount
     * @param string $message
     * @param string $structuredMessage
     * @param SepaDirectDebit|null $sepaDirectDebit
     */
    public function __construct(
        AccountOtherParty $account,
        int $statementSequence,
        int $transactionSequence,
        int $transactionDetailSequence,
        int $transactionCodeType,
        DateTime $transactionDate,
        DateTime $valutaDate,
        float $amount,
        string $message,
        string $structuredMessage,
        $sepaDirectDebit
    )
    {
        $this->account = $account;
        $this->statementSequence = $statementSequence;
        $this->transactionSequence = $transactionSequence;
        $this->transactionDetailSequence = $transactionDetailSequence;
        $this->transactionCodeType = $transactionCodeType;
        $this->transactionDate = $transactionDate;
        $this->valutaDate = $valutaDate;
        $this->amount = $amount;
        $this->message = $message;
        $this->structuredMessage = $structuredMessage;
        $this->sepaDirectDebit = $sepaDirectDebit;
    }

    public function getAccount(): AccountOtherParty
    {
        return $this->account;
    }

    public function getTransactionDate(): DateTime
    {
        return $this->transactionDate;
    }

    public function getValutaDate(): DateTime
    {
        return $this->valutaDate;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getStructuredMessage(): string
    {
        return $this->structuredMessage;
    }

    /**
     * @return SepaDirectDebit|null
     */
    public function getSepaDirectDebit()
    {
        return $this->sepaDirectDebit;
    }

    /**
     * @return int
     */
    public function getStatementSequence(): int
    {
        return $this->statementSequence;
    }

    /**
     * @return int
     */
    public function getTransactionSequence(): int
    {
        return $this->transactionSequence;
    }

    /**
     * @return int
     */
    public function getTransactionDetailSequence(): int
    {
        return $this->transactionDetailSequence;
    }

    /**
     * @return int
     */
    public function getTransactionCodeType(): int
    {
        return $this->transactionCodeType;
    }

    /**
     * @return void
     */
    public function addTransactionDetail(Transaction $transactionDetail): void
    {
        $this->transactionDetail[] = $transactionDetail;
    }
}

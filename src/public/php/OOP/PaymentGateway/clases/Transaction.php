<?php

declare(strict_types = 1 );
namespace cl;
class Transaction
{
   public const STATUS_PAID = 'paid';
   public const STATUS_PENDING = 'pending';
   public const STATUS_DECLINE = "decline";
    public const ALL_STATUS = [
        self::STATUS_DECLINE => 'decline',
        self::STATUS_PAID => 'paid',
        self::STATUS_PENDING => 'panding',

    ];
    public function __construct()
{
    $this-> setStatus(self::STATUS_DECLINE);
}

public function setStatus(string $status) : self
{
    $this->status = $status;
    return $this;
}
}
<?php

declare(strict_types = 1 );
namespace Paddle;
class Transaction
{
  private float $amount;
    public function __construct(float $amount)
{
    $this->amount = $amount;
}

public function process()
{
    echo 'Processing $' .$this->amount . 'transaction';
}
}
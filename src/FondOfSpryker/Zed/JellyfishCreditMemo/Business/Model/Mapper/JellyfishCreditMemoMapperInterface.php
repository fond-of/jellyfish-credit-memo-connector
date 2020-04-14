<?php

namespace FondOfSpryker\Zed\JellyfishCreditMemo\Business\Model\Mapper;

use Generated\Shared\Transfer\CreditMemoTransfer;
use Generated\Shared\Transfer\JellyfishCreditMemoTransfer;
use Generated\Shared\Transfer\JellyfishOrderTransfer;
use Orm\Zed\Sales\Persistence\SpySalesOrder;

interface JellyfishCreditMemoMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\CreditMemoTransfer $creditMemoTransfer
     * 
     * @return \Generated\Shared\Transfer\JellyfishCreditMemoTransfer
     */
    public function mapCreditMemoTransferToJellyfishCreditMemoTransfer(
        CreditMemoTransfer $creditMemoTransfer
    ): JellyfishCreditMemoTransfer;
}
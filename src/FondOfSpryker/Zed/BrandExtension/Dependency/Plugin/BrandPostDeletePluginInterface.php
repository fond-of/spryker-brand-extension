<?php

namespace FondOfSpryker\Zed\BrandExtension\Dependency\Plugin;

use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;

interface BrandPostDeletePluginInterface
{
    /**
     * Specification:
     * - Executes plugins after a brand is deleted.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandResponseTransfer
     */
    public function execute(BrandTransfer $brandTransfer): BrandResponseTransfer;
}

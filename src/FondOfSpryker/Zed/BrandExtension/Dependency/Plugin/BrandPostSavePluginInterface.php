<?php

namespace FondOfSpryker\Zed\BrandExtension\Dependency\Plugin;

use Generated\Shared\Transfer\BrandTransfer;

interface BrandPostSavePluginInterface
{
    /**
     * Specification:
     * - Executes plugins after a brand is saved.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function execute(BrandTransfer $brandTransfer): BrandTransfer;
}

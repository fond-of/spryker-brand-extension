<?php

namespace FondOfSpryker\Zed\BrandExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueryJoinCollectionTransfer;

interface SearchBrandQueryExpanderPluginInterface
{
    /**
     * Specification:
     * - Returns true if plugin is applicable for given filters.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\FilterFieldTransfer> $filterFieldTransfers
     *
     * @return bool
     */
    public function isApplicable(array $filterFieldTransfers): bool;

    /**
     * Specification:
     * - Expands QueryJoinCollectionTransfer with additional QueryJoinTransfers.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\FilterFieldTransfer> $filterFieldTransfers
     * @param \Generated\Shared\Transfer\QueryJoinCollectionTransfer $queryJoinCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\QueryJoinCollectionTransfer
     */
    public function expand(
        array $filterFieldTransfers,
        QueryJoinCollectionTransfer $queryJoinCollectionTransfer
    ): QueryJoinCollectionTransfer;
}

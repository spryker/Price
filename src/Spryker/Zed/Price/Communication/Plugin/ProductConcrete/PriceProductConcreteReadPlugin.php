<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Price\Communication\Plugin\ProductConcrete;

use Generated\Shared\Transfer\ProductConcreteTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Product\Dependency\Plugin\ProductConcretePluginReadInterface;

/**
 * @method \Spryker\Zed\Price\Business\PriceFacade getFacade()
 * @method \Spryker\Zed\Price\Communication\PriceCommunicationFactory getFactory()
 */
class PriceProductConcreteReadPlugin extends AbstractPlugin implements ProductConcretePluginReadInterface
{

    /**
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function read(ProductConcreteTransfer $productConcreteTransfer)
    {
        $priceProductTransfer = $this->getFacade()
            ->getProductConcretePrice($productConcreteTransfer->getIdProductConcrete());

        $productConcreteTransfer->setPrice($priceProductTransfer);

        return $productConcreteTransfer;
    }

}

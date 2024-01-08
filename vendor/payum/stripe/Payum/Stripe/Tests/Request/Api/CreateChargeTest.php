<?php
namespace Payum\Stripe\Tests\Request\Api;

use Payum\Core\Request\Generic;
use Payum\Stripe\Request\Api\CreateCharge;

class CreateChargeTest extends \PHPUnit\Framework\TestCase
{
    public function testShouldBeSubClassOfGeneric()
    {
        $rc = new \ReflectionClass(CreateCharge::class);

        $this->assertTrue($rc->isSubclassOf(Generic::class));
    }
}

<?php

namespace guduchango\ApiMagento2ExampleTests\tests;

class GeneralTest extends BaseTest
{

    public function testProductShow()
    {
        $response = $this->getRest('products/Costillas');
        $code = $response->getStatusCode();
        $this->assertEquals($code, 200);
    }

    public function testProductStore()
    {
        $product = [
            "product" => [
                "sku" => "B201-SKU",
                "name" => "B202",
                "price" => 30.00,
                "status" => 1,
                "type_id" => "simple",
                "attribute_set_id" => 4,
                "weight" => 1
                ]
        ];

        $response = $this->postRest('products', $product);
        $code = $response->getStatusCode();
        $this->assertEquals($code, 200);
    }
}
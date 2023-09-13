<?php

namespace OFFLINE\Mall\Classes\Demo\Products;

use OFFLINE\Mall\Models\ProductPrice;

class GiftCard100 extends DemoProduct
{
    protected function attributes(): array
    {
        return [
            'brand_id'                     => null,
            'user_defined_id'              => 'GIFTCARD100',
            'name'                         => '100 € Gift Card',
            'slug'                         => 'gift-card-100',
            'description_short'            => 'Valid for this store',
            'description'                  => '<p>This is a custom gift card for you to print at home.</p>',
            'meta_title'                   => '100 € Gift Card',
            'meta_keywords'                => 'gift, card',
            'weight'                       => 0,
            'inventory_management_method'  => 'product',
            'stock'                        => 100,
            'quantity_default'             => 1,
            'quantity_max'                 => 5,
            'allow_out_of_stock_purchases' => true,
            'links'                        => null,
            'stackable'                    => true,
            'shippable'                    => true,
            'price_includes_tax'           => true,
            'is_virtual'                   => true,
            'mpn'                          => 'GIFTCARD100',
            'published'                    => true,
        ];
    }

    protected function prices(): array
    {
        return [
            new ProductPrice(['currency_id' => 1, 'price' => 80.00]),
            new ProductPrice(['currency_id' => 2, 'price' => 100.00]),
            new ProductPrice(['currency_id' => 3, 'price' => 120.00]),
        ];
    }

    protected function categories(): array
    {
        return [
            $this->category('gift-cards')->id,
        ];
    }

    protected function images(): array
    {
        return [
            [
                'name'        => 'Gift Card',
                'is_main_set' => true,
                'images'      => [
                    realpath(__DIR__ . '/images/gift-card.jpg'),
                ],
            ],
        ];
    }

    protected function properties(): array
    {
        return [];
    }

    protected function variants(): array
    {
        return [];
    }

    protected function customFields(): array
    {
        return [];
    }

    protected function taxes(): array
    {
        return [];
    }
}

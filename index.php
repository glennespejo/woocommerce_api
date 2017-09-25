<?php
require __DIR__ . '/vendor/autoload.php';


use Automattic\WooCommerce\Client;
$woocommerce = new Client(
    'http://novateur.minionsolutions.com', // Your store URL
    'ck_946d2d2321e905f62ba4587b453ecba6bf8d5720', // Your consumer key
    'cs_dde33b787c620f3619015e1953523dbee406087d', // Your consumer secret
    [
        'wp_api' => true, // Enable the WP REST API integration
        'version' => 'wc/v2' // WooCommerce WP REST API version
    ]
);

// for customer
$data_customer_add = [
    'email' => 'john@example.com',      // string - required
    'first_name' => 'John',             // string - required
    'last_name' => 'Doe',               // string - required
    'username' => 'john@example.com',   // string - required
    'password'  => 'Admin12#',          // string - required (alphanumeric password with at least one special character)
    'billing' => [                      // string - required
        'first_name' => 'John',         // string - required
        'last_name' => 'Doe',           // string - required
        'address_1' => '969 Market',    // string - required
        'city' => 'San Francisco',      // string - required
        'state' => 'CA',                // string - required
        'postcode' => '94103',          // string - required
        'country' => 'US',              // string - required
        'email' => 'john@example.com',  // string - required
        'phone' => '(555) 555-5555'     // string - required
    ],
    'shipping' => [                     // string - optional
        'first_name' => 'John',         // string - optional
        'last_name' => 'Doe',           // string - optional
        'address_1' => '969 Market',    // string - optional
        'address_2' => '',              // string - optional
        'city' => 'San Francisco',      // string - optional
        'state' => 'CA',                // string - optional
        'postcode' => '94103',          // string - optional
        'country' => 'US'               // string - optional
    ],

    'meta_data' => [
        [
            'key'   => 'date_of_birth',
            'value' =>  '1990-01-01'
        ],
        [
            'key'   => 'mobile',
            'value' =>  '09123456789'
        ],
        [
            'key'   => 'my_machines',
            'value' =>
                [
                    [
                        'purchase_date' => '2017-12-29',
                        'serial_no' => '111 732 815 0638 184 1DF',
                        'product_id' => '11163',
                        'obtained_by' => 'Retailer',
                    ],
                    [
                        'purchase_date' => '2016-12-29',
                        'serial_no' => '111 732 815 0638 184 1DE',
                        'product_id' => '11163',
                        'obtained_by' => 'Retailer',
                    ]
                ]
        ]
    ]
];

//update customer
$data_customer_update = [
    'first_name' => 'Glenn',
    'billing' => [
        'first_name' => 'Glenn'
    ],
    'shipping' => [
        'first_name' => 'Glenn'
    ]
];


// for product
//coffee
$data_product_coffee_add = [
    'name'              => 'Sample Coffe Product',
    'type'              => 'simple',
    'regular_price'     => '25.99',
    'sku'               => 'SAMPLESKUCOFFE001',
    'manage_stock'      => 1,
    'stock_quantity'    => 400,
    'in_stock'          => 1,
    'backorders'        => 'no',
    'categories' => [
        [
            'id' => 18 //product category id
        ]
    ],
    'meta_data' => [
        //Product Type
        [
            'key'   => 'product_type',
            'value' => 'Coffee'
        ],
        //Description
        [
            'key'   => 'description',
            'value' => 'Sample product description'
        ],
        //Coffee Category
        [
            'key'   => 'category',
            'value' => 'lungo'
        ],
        //Cup Size
        [
            'key'   => 'size_of_cup',
            'value' => ["1"]
        ],
        //Aromatic Profile
        [
            'key'   => 'aromatic_profile',
            'value' => 'Intense'
        ],
        //Intensity
        [
            'key'   => 'intensity',
            'value' => '9'
        ],
        //Coffee Property
        [
            'key'   => 'property',
            'value' => 'Bold and Caramelised'
        ],
        //Coffee Ingredient and allegens
        [
            'key'   => 'ingredients_and_allergens',
            'value' => 'Roast and ground coffee'
        ],
        //Recycling
        [
            'key'   => 'recycling',
            'value' => 'Coming soon in the Philippines'
        ],
        //Recommended Products
        [
            'key'   => 'recommended_products',
            'value' => ["479", "514", "519", "8843"]
        ],
        [
            'key'   => '_recommended_products',
            'value' => 'field_58ff545df2a9b' //static
        ]

    ]
];

//accessories
$data_product_accessories_add = [
    'name'              => 'Sample Accessories Product',
    'type'              => 'simple',
    'regular_price'     => '1000.99',
    'sku'               => 'SAMPLEACCESSORYSKU001',
    'manage_stock'      => 1,
    'stock_quantity'    => 400,
    'in_stock'          => 1,
    'backorders'        => 'no',
    'categories' => [
        [
            'id' => 20 //product category id
        ]
    ],
    'meta_data' => [
        [
            'key'   => 'product_type',
            'value' => 'Accessory'

        ],
        [
            'key'   => 'description',
            'value' => 'Sample product description'
        ],
        [
            'key'   => 'accessory_category',
            'value' => 'Cups & Saucers'
        ],
        [
            'key'   => 'collection',
            'value' => 'Pure Collection'
        ],
        // [
        //     'key'   => 'recommended_products',
        //     'value' => ["479", "514", "519", "8843"]
        // ]

    ]
];

//machine main product
$data_product_machine_add = [
    'sku'               => 'SAMPLEMACHINESKU',
    'type'              => 'variable',
    'categories' => [
        [
            'id' => 19 //product category id
        ]
    ],
    'attributes'    => [
        [
            'name'      => 'Color',
            'variation' => 1,
            'visible'   => 1,
            'options'   => ["Black","Red"]

        ]
    ],
    'name'              => 'Sample Machine Product',
    'regular_price'     => '6500.99',
    
    'meta_data' => [
        [
            'key'   => 'product_type',
            'value' => 'Machine'

        ],
        [
            'key'   => 'description',
            'value' => 'Sample product description'
        ],
        [
            'key'   => 'short_description',
            'value' => 'Sample product short description'
        ],
        [
            'key'   => 'specification',
            'value' => 'Weight: 2.8 Kilogram .....'
        ],
        // [
        //     'key'   => 'recommended_products',
        //     'value' => ["685", "430", "10613", "11073"]
        // ]

    ]
];

//machine main product variations
$data_product_machine_variable_add = [
    'regular_price'     => '21.99',
    'sku'               => 'SAMPLEITNESP033',
    'manage_stock'      => 1,
    'stock_quantity'    => 10,
    'in_stock'          => 1,
    'backorders'        => 'no',
    'attributes'    => [
        [
            'name'      => 'Color',
            'option'    => "Red"

        ]
    ],
];


echo "<pre>"; print_r($woocommerce->post('products', $data_product_coffee_add));
// echo "<pre>"; print_r($woocommerce->post('products/12112/variations', $data_product_machine_variable_add));

// echo "<pre>"; print_r($woocommerce->put('customers/8108', $data_customer_update));
// echo "<pre>"; print_r($woocommerce->post('customers', $data_customer_add));
// echo "<pre>"; print_r($woocommerce->get('products/685'));







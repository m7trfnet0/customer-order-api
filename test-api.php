<?php

/**
 * Laravel Order API Test Script
 * 
 * This script tests the Order API endpoints using cURL.
 * Make sure the Laravel server is running before executing this script.
 */

// API base URL
$baseUrl = 'http://localhost:8000/api';

// Function to make API requests
function makeRequest($url, $method = 'GET', $data = null) {
    $curl = curl_init();
    
    $options = [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
    ];
    
    if ($data && ($method === 'POST' || $method === 'PUT')) {
        $options[CURLOPT_POSTFIELDS] = json_encode($data);
        $options[CURLOPT_HTTPHEADER] = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];
    } else {
        $options[CURLOPT_HTTPHEADER] = [
            'Accept: application/json'
        ];
    }
    
    curl_setopt_array($curl, $options);
    
    $response = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    
    curl_close($curl);
    
    return [
        'code' => $httpCode,
        'response' => json_decode($response, true)
    ];
}

// Test 1: Create a new order
echo "Test 1: Creating a new order\n";
$createOrderData = [
    'customer_id' => 1,
    'product_name' => 'Test Product',
    'quantity' => 3,
    'price' => 99.99,
    'status' => 'pending'
];
$createResult = makeRequest("$baseUrl/orders", 'POST', $createOrderData);
echo "Status Code: " . $createResult['code'] . "\n";
echo "Response: " . json_encode($createResult['response'], JSON_PRETTY_PRINT) . "\n\n";

// Test 2: Get all orders
echo "Test 2: Getting all orders\n";
$getOrdersResult = makeRequest("$baseUrl/orders");
echo "Status Code: " . $getOrdersResult['code'] . "\n";
echo "Response: " . json_encode($getOrdersResult['response'], JSON_PRETTY_PRINT) . "\n\n";

// Test 3: Update an order status
echo "Test 3: Updating an order status\n";
$orderId = 1; // Assuming order with ID 1 exists
$updateOrderData = [
    'status' => 'shipped'
];
$updateResult = makeRequest("$baseUrl/orders/$orderId", 'PUT', $updateOrderData);
echo "Status Code: " . $updateResult['code'] . "\n";
echo "Response: " . json_encode($updateResult['response'], JSON_PRETTY_PRINT) . "\n\n";

// Test 4: Get order statistics
echo "Test 4: Getting order statistics\n";
$statsResult = makeRequest("$baseUrl/orders/stats");
echo "Status Code: " . $statsResult['code'] . "\n";
echo "Response: " . json_encode($statsResult['response'], JSON_PRETTY_PRINT) . "\n\n";

echo "API Testing Completed!\n";

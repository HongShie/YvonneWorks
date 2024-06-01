<?php

// Define API key and endpoint URL
const OPENAI_API_KEY = "sk-proj-vmpi7WQomVcs36gwT9TNT3BlbkFJfaysxlx6QwN4hOjUHhI4"; // Make sure to replace with your actual API key
const ENDPOINT_URL = "https://api.openai.com/v1/chat/completions";

// Check if the API key is provided
if (OPENAI_API_KEY === "YOUR_API_KEY_HERE") {
    die("Please replace 'YOUR_API_KEY_HERE' with your OpenAI API key.");
}

// Define header parameters
$headerParameters = array(
    "Content-Type: application/json",
    "Authorization: Bearer " . OPENAI_API_KEY
);

// Define body parameters
$bodyParameters = array(
    "model" => "gpt-3.5-turbo",
    "messages" => array(
        array(
            "role" => "system",
            "content" => "Assume the persona of Shakespeare and provide profound, intellectual responses as if we were in the 1750s."
        ),
        array(
            "role" => "user",
            "content" => "What are computers!"
        )
    )
);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, ENDPOINT_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headerParameters);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($bodyParameters));

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if ($response === false) {
    die("cURL Error: " . curl_error($ch));
}

// Get HTTP status code
$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Check for HTTP errors
if ($httpStatusCode !== 200) {
    echo "HTTP Error: " . $httpStatusCode;
    echo "Response Body: " . $response;
} else {
    // Decode JSON response
    $responseData = json_decode($response, true);
    // Output response
    echo "Response Object: " . print_r($responseData, true);
}

// Close cURL session
curl_close($ch);

?>
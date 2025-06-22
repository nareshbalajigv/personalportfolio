<?

$url = "https://api.vsrdigitals.com/";


$data = array(
    "to" => "keshavaharishofficial@gmail.com",
    "subject" => $subject,
    "message" => $message_to_json
);


$jsonData = json_encode($data);
// print($jsonData);


$options = array(
    CURLOPT_URL            => $url,
    CURLOPT_HTTPHEADER     => array('Content-Type: application/json'),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST  => 'POST',
    CURLOPT_POSTFIELDS     => $jsonData,
);


$curl = curl_init();
curl_setopt_array($curl, $options);


$response = curl_exec($curl);


if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
}


curl_close($curl);


if ($response) {
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles.css">
            <title>Contact Success</title>
        </head>
        <body>
            <div class="container">
                <div class="success-message">
                    <h1>Contact Form Submitted Successfully!</h1>
                    <p>Thank you for reaching out to us. We will get back to you as soon as possible.</p>
                    <a href="https://hemanth.me">Back to Home</a>
                </div>
            </div>
        </body>
        </html>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #bdbdbd;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .success-message {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
        }

        p {
            color: #333;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

    </style>
    <?
}
 else {
    echo "Request failed\n";
}

// used to redirect to the page we needed

echo '<script type="text/javascript">window.location.href = "../index.html";</script>';

?>
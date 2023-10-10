<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox</title>
    <style>
        /* Gaya CSS untuk halaman Inbox */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
        }

        .inbox-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .message {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
        }

        .message-title {
            font-weight: bold;
        }

        .message-content {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Inbox</h1>
    </header>

    <div class="inbox-container">
        <div class="message">
            <div class="message-title">Pesan 1</div>
            <div class="message-content">
                Ini adalah pesan pertama dalam inbox Anda.
            </div>
        </div>

        <div class="message">
            <div class="message-title">Pesan 2</div>
            <div class="message-content">
                Ini adalah pesan kedua dalam inbox Anda.
            </div>
        </div>

        <div class="message">
            <div class="message-title">Pesan 3</div>
            <div class="message-content">
                Ini adalah pesan ketiga dalam inbox Anda.
            </div>
        </div>
    </div>
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Destination</title>
    
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/destination-style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: hsl(180, 98%, 31%);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: background 0.3s ease, color 0.3s ease; /* Smooth transition */
}

        button:hover {
            background: hsl(180, 98%, 26%); /* Darker shade on hover */
            color: white;
        }

        .back-btn {
            display: block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }

        .back-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Add New Destination</h2>
        <form action="1_DestinationCreate.php" method="POST" enctype="multipart/form-data">
            <label>Title:</label>
            <input type="text" name="title" required>

            <label>Description:</label>
            <textarea name="description" required></textarea>

            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Upload Image:</label>
            <input type="file" name="image" accept="image/*" required>

            <label>Category Type:</label>
            <select name="category_type" required>
                <option value="1">Featured (Food & Activities)</option>
                <option value="2">Destinations (Places)</option>
            </select>

            <button type="submit" name="upload">Upload</button>
        </form>

        <a href="1_DestinationIndex.php" class="back-btn">← Back to Destinations</a>
    </div>

</body>
</html>

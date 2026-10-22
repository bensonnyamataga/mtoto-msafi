<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Package (Article)</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #fff3f3, #f9f9f9);
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid #eee;
        }

        h2 {
            text-align: center;
            color: #800000; /* dark red */
            margin-bottom: 30px;
            font-size: 26px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        .input-container {
            margin-bottom: 22px;
        }

        .input-container small {
            display: block;
            margin-top: 5px;
            color: #777;
            font-size: 0.85em;
        }

        input[type='text'],
        textarea,
        input[type='file'] {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s;
            background-color: #fdfdfd;
        }

        input[type='text']:focus,
        textarea:focus {
            border-color: #cc0000;
            box-shadow: 0 0 5px rgba(204, 0, 0, 0.3);
            outline: none;
        }

        textarea {
            resize: vertical;
        }

        input[type='submit'] {
            width: 100%;
            padding: 15px;
            background-color: #8B0000;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type='submit']:hover {
            background-color: #a40000;
        }

        #image-preview {
            display: none;
            width: 100%;
            margin-top: 15px;
            border-radius: 10px;
            border: 1px solid #ddd;
            max-height: 300px;
            object-fit: cover;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Package (Article)</h2>
        <form method="post" enctype="multipart/form-data" action="process_package_article.php" onsubmit="return showWarnings()">
            <div class="input-container">
                <label for="title">Page Link:</label>
                <input type="text" id="title" name="title" required maxlength="400">
            </div>

            <div class="input-container">
                <label for="meta_description">Meta Description:</label>
                <input type="text" id="meta_description" name="meta_description" required maxlength="1260" style="height: 100px;">
            </div>

            <div class="input-container">
                <label for="head1">Head 1:</label>
                <input type="text" id="head1" name="head1" required maxlength="630">
            </div>

            <div class="input-container">
                <label for="overview">General Overview:</label>
                <textarea id="overview" name="overview" required maxlength="1550" style="height: 180px;"></textarea>
            </div>

            <div class="input-container">
                <label for="itinerary">Itinerary/Article:</label>
                <textarea id="itinerary" name="itinerary" required style="height: 450px;"></textarea>
                <small>Minimum 400 words, no maximum limit</small>
            </div>

            <div class="input-container">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required onchange="previewImage()">
                <img id="image-preview" src="" alt="Image Preview">
            </div>

            <input type="submit" name="add_package" value="Add Package">
        </form>
    </div>

    <script>
        function showWarnings() {
            var itinerary = document.getElementById('itinerary').value;
            var wordCount = itinerary.trim().split(/\s+/).length;
            if (wordCount < 400) {
                alert('⚠️ Itinerary should contain at least 400 words.');
            }
            return true;
        }

        function previewImage() {
            var file = document.getElementById('image').files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.getElementById('image-preview');
                img.src = e.target.result;
                img.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>

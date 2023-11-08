<!DOCTYPE html>
<html>

<head>
    <title>CGPA Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #ccc;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>CGPA Calculator</h1>
    <form method="post" action="/cgpa/calculate">
        @csrf <!-- CSRF token for form protection -->

        <label for="subject_1">Subject 1 Grade:</label>
        <input type="text" name="subject_1" required>

        <label for="subject_2">Subject 2 Grade:</label>
        <input type="text" name="subject_2" required>

        <label for="subject_3">Subject 3 Grade:</label>
        <input type="text" name="subject_3" required>

        <label for="subject_4">Subject 4 Grade:</label>
        <input type="text" name="subject_4" required>

        <label for="subject_5">Subject 5 Grade:</label>
        <input type="text" name="subject_5" required>

        <label for="subject_6">Subject 6 Grade:</label>
        <input type="text" name="subject_6" required>

        <label for="subject_7">Subject 7 Grade:</label>
        <input type="text" name="subject_7" required>

        <!-- Add more input fields for additional subjects as needed -->

        <button type="submit">Calculate CGPA</button>
    </form>
</body>

</html>

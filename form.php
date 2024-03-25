<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestion Form</title>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form id="suggestionForm" action="submit.php" method="post" class="container my-5 border border-light mr-10rem">
        <h2 style="font-weight:bold;text-align:center">Suggestion Form</h2>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="suggestion">Type your suggestion here:</label>
        <textarea id="suggetion" name="suggetion" rows="4" required></textarea>

        <input type="submit" value="Submit">
        <button type="reset" class="btn btn-success text-light">Refresh</button>
        <button type="button" class="btn btn-info"><a href="display.php" style="color: white;align-content:flex-end">Display</a></button>
    </form>

    <script src="script.js"></script>
</body>

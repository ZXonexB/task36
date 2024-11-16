<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form with AJAX Pagination</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Contact Form</h1>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div id="errorMessages"></div>
    </div>
    <div class="container">
        <div id="dataTable"></div>
        <div class="pagination">
            <button id="prevPage">&laquo; Previous</button>
            <span id="pageInfo"></span>
            <button id="nextPage">Next &raquo;</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سلام دنیا با PHP</title>
</head>
<body>
    <?php
    // چک کردن اگر فرم ارسال شده است
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // دریافت مقدار فیلد متنی از فرم
        $message = $_POST["message"];
        // نمایش متن "سلام دنیا" با مقدار وارد شده توسط کاربر
        echo "<h2>سلام دنیا، $message!</h2>";
    }
    ?>
    <form method="post">
        <label for="message">متن خود را وارد کنید:</label>
        <input type="text" id="message" name="message" required>
        <button type="submit">ارسال</button>
    </form>
</body>
</html>

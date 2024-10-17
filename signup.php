<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>إنشاء حساب</h2>
        <form method="POST" action="signup.php">
            <input type="text" name="name" placeholder="الاسم الكامل" required>
            <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit">إنشاء حساب</button>
        </form>
        <div class="link">
            <a href="login.php">لديك حساب بالفعل؟ تسجيل الدخول</a>
        </div>
    </div>
</body>
</html>

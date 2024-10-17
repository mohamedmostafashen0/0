<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الكورسات</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h2>إدارة الكورسات</h2>
    </header>
    <main>
        <h3>الكورسات المتاحة</h3>
        <table>
            <tr>
                <th>اسم الكورس</th>
                <th>سعر الكورس</th>
                <th>الإجراءات</th>
            </tr>
            <!-- سيتم ملء الجدول بالبيانات من قاعدة البيانات -->
        </table>
        <form method="POST" action="">
            <input type="text" name="course_name" placeholder="اسم الكورس" required>
            <input type="number" step="0.01" name="course_price" placeholder="سعر الكورس" required>
            <button type="submit" name="add_course">إضافة كورس</button>
        </form>
    </main>
</body>
</html>

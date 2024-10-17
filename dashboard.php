<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h2>لوحة التحكم</h2>
    </header>
    <main>
        <h3>إحصائيات المنصة</h3>
        <div class="stats">
            <div class="stat-item">عدد الطلاب: <span id="studentsCount">0</span></div>
            <div class="stat-item">إجمالي الإيرادات: <span id="totalRevenue">$0.00</span></div>
            <div class="stat-item">إجمالي الأرباح: <span id="totalProfit">$0.00</span></div>
        </div>
        <h3>إدارة الكورسات</h3>
        <form method="POST" action="">
            <input type="text" name="course_name" placeholder="اسم الكورس" required>
            <input type="number" step="0.01" name="course_price" placeholder="سعر الكورس" required>
            <button type="submit" name="add_course">إضافة كورس</button>
        </form>
    </main>
</body>
</html>

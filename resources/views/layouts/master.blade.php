<!DOCTYPE html>
<!-- تمام کدهای مشترک بین 
bladeها
در فایل مستر قرار می‌گیرند. -->
<html>
    <head>
        <title>Mini Project</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <style>
        body{
            font-family: 'b koodak', 'arial';
        }
        th, tr{
            text-align: center;
            font-size: 15px;
        }
        #crud{
            width: 300px;
        }
        .pull-left h2{
            text-align: center;
        }
        .alert{
            text-align: right;
        }
    </style>
    <body dir="rtl">
        <div class="container">
            @yield('content') 
            <!-- محتوای تمام بلیدهای تعریف شده در VIEW --> <!-- باید مشخص کنیم این دستور شامل چه چیزهایی می‌شود. -->
        </div>
    </body>
</html>
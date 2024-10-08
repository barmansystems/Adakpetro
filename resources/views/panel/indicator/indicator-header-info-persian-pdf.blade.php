<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <style>

        .div-indicator {
            position: absolute;
            right: 1px;
            top: 18rem;
            padding: 2.3rem !important;
            direction: rtl !important;
            line-height: 1.6;

        }

        .date {
            position: absolute;
            top: 5.9rem;
            left: 3.1rem;
            font-size: 1.4rem;

        }

        .number {
            position: absolute;
            top: 8.7rem;
            left: 2rem;
            font-size: 1.4rem;
            width: 8rem;
            text-align: center;
        }

        .attachment {
            position: absolute;
            top: 11.5rem;
            left: 2rem;
            font-size: 1.4rem;
            width: 8rem;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="date">
    {{englishToPersianNumbers($date)}}
</div>
<div class="number">
    {{englishToPersianNumbers($number)}}
</div>
<div class="attachment">
    {{englishToPersianNumbers($attachment)}}
</div>


<div class="div-indicator">
    <div>
        {!! $text !!}
    </div>
</div>
</body>
</html>

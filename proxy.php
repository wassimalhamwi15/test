<?php
// استقبال البيانات من تطبيق Flutter
$email = $_GET['email'] ?? '';
$code = $_GET['code'] ?? '';

// بناء الرابط الأصلي
$url = "http://www.bytes-storm.42web.io/api/bakitk/read_ads_codes.php?token=bakitk2020and4ever&email=$email&code=$code";

// تنفيذ الطلب من جهة الخادم باستخدام cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // يسمح بإعادة التوجيه
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0'); // يحاكي متصفح حقيقي
$response = curl_exec($ch);
curl_close($ch);

// إعادة إرسال الاستجابة كما هي
header('Content-Type: application/json');
echo $response;

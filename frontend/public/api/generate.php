<?php
header('Content-Type: application/json');

$API_KEY = 'AIzaSyDLVdIh3q7phMr1ZswZUokpvq5cXw7dNQA';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $education = $_POST['education'] ?? '';
  $keySkill = $_POST['keySkill'] ?? '';
  $experience = $_POST['experience'] ?? '';

  if (empty($name) || empty($education) || empty($keySkill) || empty($experience)) {
    echo json_encode([
      'success' => false,
      'error' => 'Semua field harus diisi'
    ]);
    exit;
  }

  $prompt = "Generate a professional interview script/cover letter based on the following information:

Name: $name
Educational Background: $education
Key Skills: $keySkill
Experience: $experience

Please create a well-structured, professional interview script or cover letter that:
1. Starts with a proper greeting and introduction
2. Highlights the educational background and how it's relevant
3. Emphasizes key skills and technical abilities
4. Describes relevant experience and achievements
5. Shows enthusiasm and confidence
6. Ends with a professional closing

Make it sound natural, confident, and professional. Write it in first person as if the candidate is speaking/writing.";

  $postData = [
    'contents' => [
      [
        'parts' => [
          ['text' => $prompt]
        ]
      ]
    ]
  ];

  $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=" . $API_KEY;


  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

  $response = curl_exec($ch);
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($httpCode === 200) {
    $result = json_decode($response, true);

    if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
      $script = $result['candidates'][0]['content']['parts'][0]['text'];

      echo json_encode([
        'success' => true,
        'script' => $script
      ]);
    } else {
      echo json_encode([
        'success' => false,
        'error' => 'Format response tidak valid'
      ]);
    }
  } else {
    echo json_encode([
      'success' => false,
      'error' => 'Gagal menghubungi Gemini AI. HTTP Code: ' . $httpCode
    ]);
  }
} else {
  echo json_encode([
    'success' => false,
    'error' => 'Method tidak valid'
  ]);
}

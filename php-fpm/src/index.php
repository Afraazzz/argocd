<?php
// Array of quotes
$quotes = [
  "Believe you can and you're halfway there.",
  "Don’t watch the clock; do what it does. Keep going.",
  "The harder you work for something, the greater you’ll feel when you achieve it.",
  "Dream bigger. Do bigger.",
  "Push yourself, because no one else is going to do it for you.",
  "Great things never come from comfort zones.",
  "Success doesn’t just find you. You have to go out and get it.",
  "It always seems impossible until it’s done.",
  "Start where you are. Use what you have. Do what you can."
];

// Pick a random quote
$random_quote = $quotes[array_rand($quotes)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>✨ Daily Motivation ✨</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: center;
      padding: 40px;
      width: 90%;
      max-width: 400px;
      animation: fadeIn 0.7s ease-in-out;
    }
    h1 {
      color: #333;
      margin-bottom: 20px;
    }
    .quote-box {
      background: #f7f7f7;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .quote {
      font-size: 1.2em;
      color: #555;
    }
    button {
      background: #2575fc;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }
    button:hover {
      background: #1a5ad9;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>✨ Daily Motivation ✨</h1>
    <div class="quote-box">
      <p class="quote">“<?php echo htmlspecialchars($random_quote); ?>”</p>
    </div>
    <button onclick="window.location.reload()">🔄 New Quote</button>
  </div>
</body>
</html>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/e4c29b95ce.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Prihlásenie</title>
</head>
 
<body class="flex items-center justify-center min-h-screen " id="pozadie">

    <div  class="w-full max-w-sm bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-center mb-6">Prihlásenie</h2>

        <form action="auth/auth.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Prihlasovacie meno</label>
                <input type="text" id="email" name="email" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Heslo</label>
                <input type="password" id="password" name="password" class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>

            <button type="submit" class="w-full py-2 px-4 rounded-md tlacidlo">
                Prihlasiť sa
            </button>
        </form>

        <p class="mt-4 text-sm text-center text-gray-600">
            Nemáte účet? <a href="#" class="text-boring-gray hover:underline">Registrovať sa</a>
        </p>
    </div>

</body>
</html>
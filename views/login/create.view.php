<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="h-full">




    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">



        <!-- navbar -->
        <?php require base_path('views/partials/nav.php'); ?>
        <?php require base_path('views/partials/banner.php'); ?>


        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">



                <form action="/website/public/login" method="POST" class="space-y-3">

                    <div>
                        <label for="email">Email</label> <br>
                        <input type="text" id="email"
                            name="email"
                            class="border border-black rounded-md p-2">
                    </div>
                    <div>
                        <label for="password">Password</label> <br>
                        <input type="password" id='password'
                            name="password"
                            class="border border-black rounded-md p-2">
                    </div>
                    <button type="submit" class="border border-black rounded-md p-1">Login</button>
                </form>

                <?php if (isset($errors)) : ?>
                    <p class="text-sm text-red-500"><?= $errors['email'] ?? '' ?></p>
                <?php endif; ?>
            </div>
        </main>
    </div>















    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
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
        <?php require 'partials/nav.php'; ?>
        <?php require 'partials/banner.php'; ?>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">



                <div>


                    <ul>
                        <?php foreach ($notes as $note): ?>

                            <li>
                                <a href="/website/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                                    <?= $note['body']   ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>

                </div>
            </div>
        </main>
    </div>















    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
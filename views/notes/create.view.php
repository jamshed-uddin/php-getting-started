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


                <form action="" class="space-y-2" method="POST">
                    <div>
                        <label for="body">Description</label><br>
                        <textarea name="body" id="body" class="border border-black rounded-md p-2"><?= $_POST['body'] ?? '' ?></textarea>


                        <?php if (isset($errors)) : ?>
                            <p class="text-sm text-red-500"><?= $errors['body'] ?? '' ?></p>
                        <?php endif; ?>


                    </div>

                    <button type="submit" class="border border-black rounded-md p-1">Create</button>
                </form>
            </div>
        </main>
    </div>















    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
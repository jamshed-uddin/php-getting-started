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



                <div>


                    <a href="/website/public/notes" class="hover:underline text-blue-500 block mb-10">← All notes</a>

                    <p>

                        <?= htmlspecialchars($note['body'])   ?>

                    </p>

                    </ul>
                    <div class="mt-6 flex gap-3 items-center ">
                        <div>
                            <a href="/website/public/notes/edit?id=<?= $note['id'] ?>" class="text-red-500 text-sm font-semibold">Edit</a>
                        </div>
                        <form method="POST">
                            <input type="hidden" name='method' value="DELETE">
                            <input type="hidden" name="id" value="<?= $note['id'] ?>">
                            <button type="submit" class="text-red-500 text-sm font-semibold">Delete</button>
                        </form>
                    </div>

                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
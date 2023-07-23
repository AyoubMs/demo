<?php

use function Core\base_path;

require base_path('views/partials/head.php');

require base_path('views/partials/nav.php');

require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($note['body']) ?></p>

        <footer class="mt-6 flex">
            <a href="/note/edit?id=<?= $note['id'] ?>"
               class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mr-3 mt-0">Edit</a>

            <form method="POST">
                <input type="hidden" name="_method" value="DELETE"/>
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Delete
                </button>
            </form>
        </footer>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>


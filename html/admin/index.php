<?php
session_start();
if (!isset($_SESSION['user_id']))
{
    header('Location: /login');
    exit();
}

if (isset($_GET['odhlasit']))
{
    session_destroy();
    header('Location: /login');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="../css/tailwind.css">
</head>

<body>
    <header class="lg:px-16 px-8 bg-white flex flex-wrap items-center py-4">
        <div class="flex-1 flex justify-between items-center">
            Bike rent
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
        <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </label>

        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    <li><a class="md:px-8 py-3 mx-2 text-center block border-2 transform  transition-colors rounded hover:border-green-700" href="./pre-suche-oci">Pre suché oči</a></li>
                    <li><a class="md:px-8 py-3 mx-2 text-center block border-2 transform  transition-colors rounded hover:border-green-700" href="./index.php?odhlasit">odhlasit</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <article>
        <div class="container mx-auto">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Ahoj, <?php echo $_SESSION['username'] ?>
                    </h3>
                </div>
            </div>
        </div>
    </article>

</html>
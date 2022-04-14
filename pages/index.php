<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<style>
::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(13deg, rgb(200, 200, 200) 14%, gray 64%);
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(13deg, rgb(220, 220, 220) 14%, rgb(200, 200, 200) 64%);
}

::-webkit-scrollbar-track {
    background: #ffffff;
    box-shadow: inset 7px 10px 12px #f0f0f0;
}
</style>

<body class="w-full h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="w-full flex h-screen bg-gray-50">
        <div class="flex-1 flex flex-col overflow-hidden">
            <?php include "partials/header.php"; ?>
            <div class="relative flex h-full">
                <?php include "partials/sidebar.php";?>
                <main class="relative w-full flex flex-col overflow-x-hidden">

                    <div class="sticky top-0 z-20 bg-gray-50 mb-4">
                        <a href="#"><img class="h-26 w-full m-auto lg:mt-5 pb-0 lg:px-6" src="img/adbanner.jpg"
                                alt="ad photo"></a>
                    </div>
                    <?php include "partials/posts.php";?>
                    <?php include "partials/footer.php"; ?>
                </main>
                <?php include "partials/rightbar.php";?>
            </div>
        </div>
    </div>
</body>
<?php include "partials/scripts.php";?>

</body>

</html>
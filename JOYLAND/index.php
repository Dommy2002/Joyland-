<?php
    require "app/database.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact Joyland</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col gap-6 w-full items-start justify-start bg-gray-50">

    <div class="w-full h-full">
        <div class="z-50 fixed top-0 w-full">
            <?php
            require 'components/navBar.php'
            ?>
        </div>

    <!--        welcome text and  image -->
        <div class="w-full h-[350px] bg-[url('images/kitchen.jpg')]
        bg-cover bg-no-repeat bg-center relative mt-10">

            <div class=" w-10/12 min-h-[600px]
                rounded-md bg-white absolute top-[80%] left-1/2 transform -translate-x-1/2
                flex flex-col gap-2 p-4">
                <div class="h-16 w-16 bg-gray-200 rounded-md
                text-[#3E2093] text-3xl font-bold capitalize
                    flex items-center justify-center">
                    J
                </div>

                <h3 class="text-xl font-bold">Properties</h3>

                <div class="flex flex-wrap gap-4 my-2">
                    <?php
                    for ($i = 0; $i < 8; $i++) {
                        echo '<div class="flex flex-col gap-2 rounded-lg border border-gray-300 w-[270px]">
                                <img src="images/kitchen.jpg" class="rounded-t-lg h-[150px]">
        
                                <div class="flex flex-col gap-2 p-2">
                                    <h3 class="text-lg font-bold">KES 5,000,000</h3>
        
                                    <p class="text-gray-600 font-semibold text-sm">5 bedroom house, ample parking,
                                        heated swimming pool and partio</p>
        
                                    <button class="h-10 w-full mt-4  flex rounded-lg
                                    border border-[#3E2093]
                                    items-center gap-2 justify-center">
                                        Closed
                                    </button>
                                </div>
                            </div>';
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
 
</body>
</html>
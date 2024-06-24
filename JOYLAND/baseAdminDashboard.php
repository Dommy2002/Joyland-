

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Joyland Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen bg-gray-50">
<div class="fixed top-0 w-full">
    <?php
        require "components/navBar.php"
    ?>
</div>

<div class="mt-32 flex flex-col gap-4 w-full">


    <div class="w-full md:w-6/12 mx-auto">

        <div class="
        text-sm font-medium text-center text-gray-500 border-b border-gray-200
         dark:text-gray-400 dark:border-gray-700 my-2 bg-white rounded">
            <ul class="flex flex-wrap -mb-px">
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600
                    hover:border-gray-300 dark:hover:text-gray-300">Register Tenant</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600
                    rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">View Tenants</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600
                    rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Create Ad</a>
                </li>
                <li class="mr-2">
                    <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600
                    rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Register Landlord</a>
                </li>
            </ul>
        </div>

    </div>




</div>

<script>
    const imageSlider = (id)=> {
        for (var i = 1; i < 7; i++) {
            //imageTab
            const tabSpace = document.getElementById('imageTab')

            if (i === id) {
                tabSpace.removeChild(tabSpace.firstElementChild)
                var x = document.createElement("IMG");

                x.setAttribute("src", `${images[id]}`);
                //image class
                x.setAttribute("class", "rounded-lg min-h-[400px] lg:h-[665px] w-full");
                tabSpace.appendChild(x)
            }
        }
    }
</script>

</body>
</html>





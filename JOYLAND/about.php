<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact joyland</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col gap-6 w-full items-start justify-start bg-gray-50">

<div class="w-full h-full flex flex-col gap-4">
    <div class=" z-50 fixed top-0 w-full">
        <?php
        require 'components/navBar.php'
        ?>
    </div>

    <!--        welcome text and  image -->
    <div class="p-4 flex gap-4 mt-32 md:mt-24">
       <div class="h-[300px] md:h-[450px]
       bg-[url('images/kitchen.jpg')] bg-cover bg-no-repeat
        w-full md:w-9/12 rounded-lg">

       </div>

        <div class="hidden md:flex flex-col gap-2 w-2/12  ">
            <div class="h-[150px] w-full
             bg-[url('images/kitchen.jpg')] bg-cover bg-no-repeat rounded-lg">

            </div>

            <div class="h-[150px]
            bg-[url('images/kitchen.jpg')] bg-cover bg-no-repeat
            w-full  rounded-lg">

            </div>
        </div>
    </div>

    <div class="px-4">
        <h3 class="text-2xl font-bold ">History</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-9/12 gap-4">
            <?php
                for ($i = 0; $i < 2; $i++) {
                    echo '<p class="w-full h-fit my-2 text-gray-600 md:border-r pr-4 py-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis diam
                        at mi ultrices, ut fringilla nunc lacinia. Aenean eget sapien id purus ultricies
                        feugiat. Fusce convallis auctor ligula, eu congue turpis euismod at. Integer
                        bibendum enim vel efficitur eleifend. Maecenas ut ligula non elit tincidunt vulputate.
                        Proin vehicula aliquet purus, et interdum quam tempor eu. Morbi ullamcorper, dui non
                        egestas cursus, felis urna ultricies odio, et semper dolor justo et nisi. Vivamus eu
                        vulputate ipsum, a consectetur elit. Cras cursus neque in libero facilisis, in tempus s
                        apien interdum. Sed hendrerit urna et lacinia fermentum. Integer accumsan tellus ac tellus vehicula, nec sollicitudin lacus euismod. Aenean efficitur consectetur turpis, nec fringilla
                        nibh vehicula in. Sed nec ex et est ullamcorper vehicula. Vestibulum sit amet sagittis ex.
                    </p>';
                }
            ?>
        </div>



    </div>
</div>

</body>
</html>
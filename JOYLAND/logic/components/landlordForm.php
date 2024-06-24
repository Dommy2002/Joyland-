
<?php
    require "logic/registerLandlord.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register tenant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<form method="post"
      class="p-4 flex flex-col items-start justify-center gap-4 w-full rounded-lg bg-white">

    <h3 class="text-lg font-bold">Landlord Registration</h3>

    <div class="grid md:grid-cols-1 gap-4 w-full  ">
        <div class="flex flex-col gap-1 w-[90%]">
            <label for="fname">First Name</label>
            <input type="text" name="fname" class="border-b-2 p-2
                focus-none outline-none
                text-gray-600 border-gray-400" >
        </div>

        <div class="flex flex-col gap-1 w-[90%]">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" class="border-b-2 p-2
                focus-none outline-none
                text-gray-600 border-gray-400" >
        </div>

        <div class="flex flex-col gap-1 w-[90%]">
            <label for="mail">Mail</label>
            <input type="email" name="email" class="border-b-2 p-2
                focus-none outline-none
                text-gray-600 border-gray-400" >
        </div>



    </div>

    <input type="submit" name="submit" class="my-2 h-10 w-[16] px-10 bg-[#3E2093] text-white  rounded-2xl"
           value="submit">


</form>


</body>
</html>

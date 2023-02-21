<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="layout.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
</head>

<body>
    <!-- <header>

</header> -->
    <nav>
        <ul>
            
        </ul>
    </nav>
    <div class="div">

        <aside class="">
            <!-- <div class="open"> -->
                <li><button><i class="menu bx bx-menu"></i></button></li>
                <li><a href=""><i class="bx bx-notepad">    </i>Report      </a></li>
                <li><a href=""><i class="bx bx-edit">       </i>Update      </a></li>
                <li><a href=""><i class="bx bx-cog">        </i>Settings    </a></li>
                <li><a href=""><i class="bx bx-user">       </i>Profile     </a></li>
            <!-- </div> -->
        </aside>

        <main>

        </main>

    </div>
    <footer>

    </footer>
</body>

</html>
<script>

    side = document.querySelector('aside'),
    menuBtns = document.querySelector(".menu");
    menuBtns.addEventListener("click", () =>    {
    side.classList.toggle("close");
                                                })
</script>
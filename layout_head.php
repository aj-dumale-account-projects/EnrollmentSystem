<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ito page title to. dapat kada page natin may pangalan kase pede tong magamit para mag navigate ng website pages -->
    <title><?php echo $page_title; ?></title>

    <!-- ito naman para to sa css dapat ang mga folder natin naka organize para di siya makalat tignan -->
    <link rel="stylesheet" href="libs/css/custom.css">
    <link rel="stylesheet" href="libs/css/signup.css">
</head>
<body>
    
    <div class="container">
        <div class="logo-header">
            <img src="libs/images/logo.png" alt="">

            <?php

                if ($page_title == "Index") {
                    echo "<div class='header-buttons'>";
                        echo "<ul>";
                            echo "<li>";
                                echo "<a href='#'>";
                                    echo "<button>Home</button>";
                                echo "</a>";
                            echo "</li>";

                            echo "<li>";
                                echo "<a href='#'>";
                                    echo "<button>Products</button>";
                                echo "</a>";
                            echo "</li>";
        
                            echo "<li>";
                                echo "<a href='#'>";
                                    echo "<button>Services</button>";
                                echo "</a>";
        
                            echo "</li>";
                            
                            echo "<li>";
                                echo "<a href='#'>";
                                    echo "<button>About</button>";
                                echo "</a>";
                            echo "</li>";
                        echo "</ul>";
                echo "</div>";
                }
            
            
            ?>

        </div>

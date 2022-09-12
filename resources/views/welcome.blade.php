<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Leo's Money Manager | Manage your money with Money Manager</title>
        {{-- Links --}}
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        {{-- Script--}}
        <script src="js/main.js" async></script>
        <script src="https://kit.fontawesome.com/40088f8c00.js" crossorigin="anonymous" async></script>
    </head>
    <body>
        <div class="flex">

            {{-- Navbar --}}


            <div class="topnav">
                <div class="topnav ">
                    <!-- Centered link -->
                    <div class="topnav-centered">
                        <a href="#home" class="active"><h5>Transaction</h5></a>
                    </div>
                    <!-- Left-aligned links (default) -->
                    <a href="#search"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <!-- Right-aligned links -->
                    <div class="topnav-right">
                        <a href="#bookmark"><i class="fa-solid fa-bookmark"></i></a>
                        <a href="#about"><i class="fa-solid fa-filter"></i></a>
                    </div>
                </div>

                {{-- Month --}}
                <div class="d-flex justify-content-center  div-color">
                    <div class="flex-grow-1">
                        <a href="#home" ><i class="fa-solid fa-angle-left"></i></a>
                    </div>
                    <div class="flex-grow-1">
                        <a href="#home" >Month</a>
                    </div>
                    <div class="flex-grow-1">
                        <a href="#home" ><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
                
                {{-- Day - Calendar - Weekly - Monthly -Total --}}
                <div class="d-flex justify-content-center div-color">
                    <div class="col-sm">
                        <a href="#home" ><p class="text-center">Daily</p></a>
                    </div>
                    <div class="col-sm">
                        <a href="#home" ><p class="text-center">Calendar</p></a>
                    </div>
                    <div class="col-sm">
                        <a href="#home" ><p class="text-center">Weekly</p></a>
                    </div>
                    <div class="col-sm">
                        <a href="#home" ><p class="text-center">Monthly</p></a>
                    </div> 
                    <div class="col-sm">
                        <a href="#home" ><p class="text-center">Summary</p></a>
                    </div> 
                </div>

                {{-- Income - Expenses - Total --}}
                <div class="d-flex justify-content-center div-border div-color">
                    <div class="col-sm">
                        <a href="#home" ><p class="text-center">Income</p></a>
                        <p class="text-center">{{ $incomes }}</p>
                    </div>
                    <div class="col-sm">
                         <a href="#home" ><p class="text-center">Expense</p></a>
                         <p class="text-center">{{ $expenses  }}</p>


                    </div>
                    <div class="col-sm">
                         <a href="#home" ><p class="text-center">Total</p></a>
                        <p class="text-center">{{ $total }}</p>
                    </div>
                </div>

            {{-- fab --}}




            <div id="floating-button">
                <p class="plus">+</p>
            </div>
        </div>   

      {{--   Put foreach here --}}

       

    </body>
</html>
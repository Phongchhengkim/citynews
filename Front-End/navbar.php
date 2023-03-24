<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magazine Online Template</title>


  <link rel="shortcut icon" href="./img/citynewslogo.png" type="image/x-icon">

  <!-- tailwind cdn link -->
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="mystyle.css">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

  <!-- link icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Bokor&family=Hanuman:wght@400;700&family=Roboto:wght@300;400&display=swap');

      body{
        font-family: 'Roboto', 'Hanuman';
      }
      /* .navbar .active>a {
            background-color: #C0C0C0;
            color: red !important;
      } */
    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
<body >
    <!-- =================== Header ===================== -->
    <nav class="bg-blue-900  py-2.5 fixed w-full  z-50 top-0 left-0">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="#" class="flex items-center">
        <?php
          $con = mysqli_connect("localhost","root","","db_city_news");
                $sql_select="SELECT * FROM tbl_logo ORDER BY id DESC LIMIT 1";
                $result=$con->query($sql_select);
                $row=mysqli_fetch_array($result);
                echo'
                  <img src="../admin/Backend Theme/img/'.$row['logo'].'" class="h-6 sm:h-24 mr-3 " alt="" />
                ';
        ?>
      </a>
      <div class="flex md:order-1">
        <div class="relative md:block">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 mt-1 pointer-events-none">
          <i class="fa-solid fa-magnifying-glass mb-1"></i>
            <span class="sr-only">Search icon</span>
          </div>
          <input type="text" id="search-navbar"
            class="block w-26 h-7 md:w-18 pl-10 text-sm  text-gray-900 border border-gray-300 rounded-lg bg-gray-50  focus:border-blue-900 "
            placeholder="Search...">
        </div>
      </div>

      <button data-collapse-toggle="navbar-dropdown" type="button"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none  "
        aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
        </svg>
      </button>

      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul
          class="navbar flex flex-col p-4 mt-4 md:flex-row md:space-x-6 md:mt-0 md:text-xl md:font-medium text-white rounded-xl">
          <li class=" active">
            <a href="index.php"
              class=" block py-2 pl-3 pr-4 rounded hover:bg-blue-5000 md:hover:bg-transparent md:p-0 md:hover:text-red-500"
              aria-current="page">ទំព័រដើម</a>
          </li>
          <li class="">
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
              class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium md:border-0 md:p-0 md:w-auto focus:outline-none hover:bg-blue-500 md:hover:bg-transparent md:p-0 md:hover:text-red-500">ព័ត៌មានជាតិ
              <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-50 hidden font-normal bg-blue-800 rounded-lg shadow w-44 md:p-0">
              <ul class="py-2 text-sm" aria-labelledby="dropdownLargeButton">
                <li class="">
                  <a href="social.php" class=" block px-4 py-2 hover:bg-blue-500 ">សង្គម</a>
                </li>
                <li class="">
                  <a href="security.php" class=" block px-4 py-2 hover:bg-blue-500 ">សន្តិសុខ</a>
                </li>
                <li class="">
                  <a href="politic.php" class=" block px-4 py-2 hover:bg-blue-500 ">នយោបាយ</a>
                </li>
              </ul>
            </div>
          </li>
          <li class=" ">
            <a href="sport.php"
              class=" block py-2 pl-3 pr-4  hover:bg-blue-500 md:hover:bg-transparent md:p-0 md:hover:text-red-500">កីឡា</a>
          </li>
          <li class="">
            <a href="technology.php"
              class=" block py-2 pl-3 pr-4  hover:bg-blue-500 md:hover:bg-transparent  md:p-0 md:hover:text-red-500">បច្ចេកវិទ្យា</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ================= END HEADER ================= -->
</body>
</html>


<!-- ======= script ====== -->

<!-- aos script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.3.js"></script>

<script>
  // ============== navbar ===============
  const $dropdownNavbar = document.getElementById('dropdownNavbar');

  const $dropdownNavbarLink = document.getElementById('dropdownNavbarLink');

  const options: CollapseOptions = {
    onCollapse: () => {
      console.log('element has been collapsed')
    },
    onExpand: () => {
      console.log('element has been expanded')
    },
    onToggle: () => {
      console.log('element has been toggled')
    }
  };

  const collapse: CollapseInterface = new Collapse($dropdownNavbar, $dropdownNavbarLink, options);

  collapse.expand();
  // ============ end nav bar============

  // =============== slider ============
  // =============== auto slide =======
  const items: CarouselItem[] = [
    {
        position: 0,
        el: document.getElementById('carousel-item-1')
    },
    {
        position: 1,
        el: document.getElementById('carousel-item-2')
    },
    {
        position: 2,
        el: document.getElementById('carousel-item-3')
    },
];

const options: CarouselOptions = {
    defaultPosition: 1,
    
    
    indicators: {
        activeClasses: 'bg-white dark:bg-gray-800',
        inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
        items: [
            {
                position: 0,
                el: document.getElementById('carousel-indicator-1')
            },
            {
                position: 1,
                el: document.getElementById('carousel-indicator-2')
            },
            {
                position: 2,
                el: document.getElementById('carousel-indicator-3')
            },
        ]
    },
    
    // callback functions
    onNext: () => {
        console.log('next slider item is shown');
    },
    onPrev: ( ) => {
        console.log('previous slider item is shown');
    },
    onChange: ( ) => {
        console.log('new slider item has been shown');
    }
};

const carousel: CarouselInterface = new Carousel(items, options);

carousel.cycle()

// set event listeners for prev and next buttons
const $prevButton = document.getElementById('data-carousel-prev');
const $nextButton = document.getElementById('data-carousel-next');

$prevButton.addEventListener('click', () => {
    carousel.prev();
});

$nextButton.addEventListener('click', () => {
    carousel.next();

    setInterval(function () {
                nextSlide()
            }, 5000);
});
  // =========== end slider =============

</script>

<script>
        $(document).ready(function () {

            $("li").click(function (event) {
                    $("li").removeClass("active");
                    $(this).addClass("active");
                });
        });
    </script>

<script>
  AOS.init();
</script>

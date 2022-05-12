<?php
$fall = array(
  "Spring Vacation Packages" => "vacation-deals/seasonal-vacations/spring-vacation-packages",
  "Summer Vacation Packages" => "vacation-deals/seasonal-vacations/summer-vacation-packages",
  "Winter Vacation Packages" => "vacation-deals/seasonal-vacations/winter-vacation-packages",
);
$spring = array(
  "Fall Vacation Packages" => "vacation-deals/seasonal-vacations/fall-vacation-packages",
  "Summer Vacation Packages" => "vacation-deals/seasonal-vacations/summer-vacation-packages",
  "Winter Vacation Packages" => "vacation-deals/seasonal-vacations/winter-vacation-packages",
);
$summer = array(
  "Fall Vacation Packages" => "vacation-deals/seasonal-vacations/fall-vacation-packages",
  "Spring Vacation Packages" => "vacation-deals/seasonal-vacations/spring-vacation-packages",
  "Winter Vacation Packages" => "vacation-deals/seasonal-vacations/winter-vacation-packages",
);
$winter = array(
  "Fall Vacation Packages" => "vacation-deals/seasonal-vacations/fall-vacation-packages",
  "Spring Vacation Packages" => "vacation-deals/seasonal-vacations/spring-vacation-packages",
  "Summer Vacation Packages" => "vacation-deals/seasonal-vacations/summer-vacation-packages",
);

?>

<div class="bg-gradient-to-r from-slate-900 to-blue-800 my-8">
  <div class="container xl:max-w-7xl mx-auto px-4 py-16">
    <section class="relative pt-1 pb-4">
      <div class="text-left max-w-4xl">
        <div class="sm:flex sm:items-baseline sm:justify-between">
          <h1 class="text-xl tracking-tight font-extrabold text-white sm:text-2xl md:text-3xl">
            <span class="block xl:inline">
              Explore More <?php the_title(); ?>
            </span>
          </h1>
        </div>
        <p class="text-md text-white sm:text-base md:text-base lg:mx-0 my-4 font-medium">
          Find the Right <?php the_title(); ?> and Book with Confidence.
        </p>
      </div>
    </section>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-white">

      <!-- Explore Hotels in Australia -->
      <?php if ($post->post_name == 'fall-vacation-packages') { ?>
        <?php foreach ($fall as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M21.59 11.59h-2.36V8.66c0-.23-.2-.41-.43-.41h-5.82a.42.42 0 00-.43.41v2.93H10.2a.42.42 0 00-.43.41v8.34c0 .23.21.41.43.41h11.4c.21 0 .41-.2.41-.41V12c0-.23-.2-.41-.41-.41zm-7.36-1.68h3.32v1.68h-3.32V9.91zm3.79 9.06l-1.2-1.17 2.37-2.36 1.17 1.17-2.34 2.36zM10.89 4.91V3.66a.4.4 0 00-.41-.41H4.64a.4.4 0 00-.41.41v2.93H2.4A.4.4 0 002 7v13.34c0 .2.18.41.41.41h5.7V10.34c0-.23.18-.43.41-.43h2.37v-5zM9.23 6.59H5.89V4.91h3.34v1.68z" clip-rule="evenodd" />
              </svg>

              <?php echo $name; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Hotels in Caribbean -->
      <?php if ($post->post_name == 'spring-vacation-packages') { ?>
        <?php foreach ($spring as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M21.59 11.59h-2.36V8.66c0-.23-.2-.41-.43-.41h-5.82a.42.42 0 00-.43.41v2.93H10.2a.42.42 0 00-.43.41v8.34c0 .23.21.41.43.41h11.4c.21 0 .41-.2.41-.41V12c0-.23-.2-.41-.41-.41zm-7.36-1.68h3.32v1.68h-3.32V9.91zm3.79 9.06l-1.2-1.17 2.37-2.36 1.17 1.17-2.34 2.36zM10.89 4.91V3.66a.4.4 0 00-.41-.41H4.64a.4.4 0 00-.41.41v2.93H2.4A.4.4 0 002 7v13.34c0 .2.18.41.41.41h5.7V10.34c0-.23.18-.43.41-.43h2.37v-5zM9.23 6.59H5.89V4.91h3.34v1.68z" clip-rule="evenodd" />
              </svg>

              <?php echo $name; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Domestic Hotels -->
      <?php if ($post->post_name == 'summer-vacation-packages') { ?>
        <?php foreach ($summer as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M21.59 11.59h-2.36V8.66c0-.23-.2-.41-.43-.41h-5.82a.42.42 0 00-.43.41v2.93H10.2a.42.42 0 00-.43.41v8.34c0 .23.21.41.43.41h11.4c.21 0 .41-.2.41-.41V12c0-.23-.2-.41-.41-.41zm-7.36-1.68h3.32v1.68h-3.32V9.91zm3.79 9.06l-1.2-1.17 2.37-2.36 1.17 1.17-2.34 2.36zM10.89 4.91V3.66a.4.4 0 00-.41-.41H4.64a.4.4 0 00-.41.41v2.93H2.4A.4.4 0 002 7v13.34c0 .2.18.41.41.41h5.7V10.34c0-.23.18-.43.41-.43h2.37v-5zM9.23 6.59H5.89V4.91h3.34v1.68z" clip-rule="evenodd" />
              </svg>

              <?php echo $name; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Hotels in Europe -->
      <?php if ($post->post_name == 'winter-vacation-packages') { ?>
        <?php foreach ($winter as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M21.59 11.59h-2.36V8.66c0-.23-.2-.41-.43-.41h-5.82a.42.42 0 00-.43.41v2.93H10.2a.42.42 0 00-.43.41v8.34c0 .23.21.41.43.41h11.4c.21 0 .41-.2.41-.41V12c0-.23-.2-.41-.41-.41zm-7.36-1.68h3.32v1.68h-3.32V9.91zm3.79 9.06l-1.2-1.17 2.37-2.36 1.17 1.17-2.34 2.36zM10.89 4.91V3.66a.4.4 0 00-.41-.41H4.64a.4.4 0 00-.41.41v2.93H2.4A.4.4 0 002 7v13.34c0 .2.18.41.41.41h5.7V10.34c0-.23.18-.43.41-.43h2.37v-5zM9.23 6.59H5.89V4.91h3.34v1.68z" clip-rule="evenodd" />
              </svg>

              <?php echo $name; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

    </div>
  </div>
</div>
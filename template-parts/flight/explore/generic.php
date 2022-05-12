<?php 
  $los_angeles = array(
    "Flights to Delhi" => "flight-deals/india/flights-to-delhi",
    "Flights to Hong Kong" => "flight-deals/china/flights-to-hong-kong",
    "Flights to London" => "flight-deals/united-kingdom/flights-to-london",
    "Flights to Paris" => "flight-deals/france/flights-to-paris",
    "Flights to Tehran" => "flight-deals/iran/flights-to-tehran",
  );
  $delhi = array(
    "Flights to Los Angeles" => "flight-deals/united-states/california/flights-to-los-angeles",
    "Flights to Hong Kong" => "flight-deals/china/flights-to-hong-kong",
    "Flights to London" => "flight-deals/united-kingdom/flights-to-london",
    "Flights to Paris" => "flight-deals/france/flights-to-paris",
    "Flights to Tehran" => "flight-deals/iran/flights-to-tehran",
  );
  $hongkong = array(
    "Flights to Los Angeles" => "flight-deals/united-states/california/flights-to-los-angeles",
    "Flights to Delhi" => "flight-deals/india/flights-to-delhi",
    "Flights to London" => "flight-deals/united-kingdom/flights-to-london",
    "Flights to Paris" => "flight-deals/france/flights-to-paris",
    "Flights to Tehran" => "flight-deals/iran/flights-to-tehran",
  );
  $london = array(
    "Flights to Los Angeles" => "flight-deals/united-states/california/flights-to-los-angeles",
    "Flights to Delhi" => "flight-deals/india/flights-to-delhi",
    "Flights to Hong Kong" => "flight-deals/china/flights-to-hong-kong",
    "Flights to Paris" => "flight-deals/france/flights-to-paris",
    "Flights to Tehran" => "flight-deals/iran/flights-to-tehran",
  );
  $paris = array(
    "Flights to Los Angeles" => "flight-deals/united-states/california/flights-to-los-angeles",
    "Flights to Delhi" => "flight-deals/india/flights-to-delhi",
    "Flights to Hong Kong" => "flight-deals/china/flights-to-hong-kong",
    "Flights to London" => "flight-deals/united-kingdom/flights-to-london",
    "Flights to Tehran" => "flight-deals/iran/flights-to-tehran",
  );
  $tehran = array(
    "Flights to Los Angeles" => "flight-deals/united-states/california/flights-to-los-angeles",
    "Flights to Delhi" => "flight-deals/india/flights-to-delhi",
    "Flights to Hong Kong" => "flight-deals/china/flights-to-hong-kong",
    "Flights to London" => "flight-deals/united-kingdom/flights-to-london",
    "Flights to Paris" => "flight-deals/france/flights-to-paris",
  );
  
?>

<div class="bg-gradient-to-r from-slate-900 to-blue-800">
  <div class="container xl:max-w-7xl mx-auto px-4 py-16 my-16">
    <section class="relative pt-1 pb-4">
      <div class="text-left max-w-4xl">
        <div class="sm:flex sm:items-baseline sm:justify-between">
          <h1 class="text-xl tracking-tight font-extrabold text-white sm:text-2xl md:text-3xl">
            <span class="block xl:inline">
              Explore More Flight Deals
            </span>
          </h1>
        </div>
        <p class="text-md text-white sm:text-base md:text-base lg:mx-0 my-4 font-medium">
          Find the right flight for cheap with Trip Support
        </p>
      </div>
    </section>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-white">

      <!-- California Explore Links -->
      <?php if ($post->post_name == 'flights-to-los-angeles') { ?>
        <?php foreach ($los_angeles as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>

              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- Delhi Explore Links -->
      <?php if ($post->post_name == 'flights-to-delhi') { ?>
        <?php foreach ($delhi as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- Hongkong Explore Links -->
      <?php if ($post->post_name == 'flights-to-hong-kong') { ?>
        <?php foreach ($hongkong as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- London Explore Links -->
      <?php if ($post->post_name == 'flights-to-london') { ?>
        <?php foreach ($london as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- Paris Explore Links -->
      <?php if ($post->post_name == 'flights-to-paris') { ?>
        <?php foreach ($paris as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- Tehran Explore Links -->
      <?php if ($post->post_name == 'flights-to-tehran') { ?>
        <?php foreach ($tehran as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>

    </div>
  </div>
</div>

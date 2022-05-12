<?php 
  $cayococo = array(
    "Varadero" => "/destinations/cuba/varadero",
    "Havana" => "/destinations/cuba/havana",
    "Holguin" => "/destinations/cuba/holguin",
    "Cayo Santa Maria" => "/destinations/cuba/cayo-santa-maria",
    "Cuba" => "/destinations/cuba",
  );
  $varadero = array(
    "Cayo Coco" => "/destinations/cuba/cayo-coco",
    "Havana" => "/destinations/cuba/havana",
    "Holguin" => "/destinations/cuba/cayo-santa-maria",
    "Cayo Santa Maria" => "/destinations/cuba/cayo-santa-maria",
    "Cuba" => "/destinations/cuba",
  );
  $havana = array(
    "Cayo Coco" => "/destinations/cuba/cayo-coco",
    "Varadero" => "/destinations/cuba/varadero",
    "Holguin" => "/destinations/cuba/holguin",
    "Cayo Santa Maria" => "/destinations/cuba/cayo-santa-maria",
    "Cuba" => "/destinations/cuba",
  );
  $holguin = array(
    "Cayo Coco" => "/destinations/cuba/cayo-coco",
    "Varadero" => "/destinations/cuba/varadero",
    "Havana" => "/destinations/cuba/havana",
    "Cayo Santa Maria" => "/destinations/cuba/cayo-santa-maria",
    "Cuba" => "/destinations/cuba",
  );
  $santamaria = array(
    "Cayo Coco" => "/destinations/cuba/cayo-coco",
    "Varadero" => "/destinations/cuba/varadero",
    "Havana" => "/destinations/cuba/havana",
    "Holguin" => "/destinations/cuba/holguin",
    "Cuba" => "/destinations/cuba",
  );
?>

<div class="bg-gradient-to-r from-slate-900 to-blue-800">
  <div class="container xl:max-w-7xl mx-auto px-4 py-16 my-16">
    <section class="relative pt-1 pb-4">
      <div class="text-left max-w-4xl">
        <div class="sm:flex sm:items-baseline sm:justify-between">
          <h1 class="text-xl tracking-tight font-extrabold text-white sm:text-2xl md:text-3xl">
            <span class="block xl:inline">
              Explore More Destinations
            </span>
          </h1>
        </div>
        <p class="text-md text-white sm:text-base md:text-base lg:mx-0 my-4 font-medium">
          Find the Right Destination and Book with Confidence.
        </p>
      </div>
    </section>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-white">

      <!-- Cayo Coco Explore Links -->
      <?php if ($post->post_name == 'cayo-coco') { ?>
        <?php foreach ($cayococo as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- varadero Explore Links -->
      <?php if ($post->post_name == 'varadero') { ?>
        <?php foreach ($varadero as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- havana Explore Links -->
      <?php if ($post->post_name == 'havana') { ?>
        <?php foreach ($havana as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- holguin Explore Links -->
      <?php if ($post->post_name == 'holguin') { ?>
        <?php foreach ($holguin as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      <!-- santamaria Explore Links -->
      <?php if ($post->post_name == 'cayo-santa-maria') { ?>
        <?php foreach ($santamaria as $name => $link) { ?>
          <a href="<?php echo $link ?>" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
              </svg>
              <?php echo $name; ?>
            </div>
          </a>
        <?php }?>
      <?php }?>
      
      

    </div>
  </div>
</div>

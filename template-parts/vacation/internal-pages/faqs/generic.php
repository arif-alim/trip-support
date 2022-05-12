<?php
$fall = array(
  array(
    "What are the best places to visit in the fall?" => "Fall is often a good time to travel, not only because it’s still beautiful out there but because fewer people are traveling. This often translates to lower fares and great bargains on hotels. Some of the places you can visit before you are locked in for winter include Yellowstone National Park, Scottish Highlands, Bavaria, England’s Lake District, Canadian Rockies, Switzerland, New York City, Sonoma, Napa Valley, Arizona, etc.",
    "How much does a fall vacation package cost?" => "A fall vacation package depends on how much you want to travel. Trip Support offers full vacation packages for both short and long stay vacations. You can get a short stay vacation for as low as $700.",
    "How do I get a cheap travel package for fall?" => "The simplest way to get a cheap vacation package is by booking everything in one place. This way, you will not only benefit from bargains, and deals on hotels, flights, and activities, but it also makes it easier to coordinate your trip. You save more overall on a bundle, and with over 1,000 destinations on Trip Support, there is no place you cannot go.",
    "Can I book my fall vacation now and pay later?" => "Yes. Trip Support allows you to book now and pay later on your flights and hotel bookings. If you are booking in advance of your trip, you will benefit from early bird offers and travel credit free, as your vacation will be fully paid for in cash before you travel.",
  ),
);
$spring = array(
  array(
    "What are the best places to visit in the fall?" => "Fall is often a good time to travel, not only because it’s still beautiful out there but because fewer people are traveling. This often translates to lower fares and great bargains on hotels. Some of the places you can visit before you are locked in for winter include Yellowstone National Park, Scottish Highlands, Bavaria, England’s Lake District, Canadian Rockies, Switzerland, New York City, Sonoma, Napa Valley, Arizona, etc.",
    "How much does a fall vacation package cost?" => "A fall vacation package depends on how much you want to travel. Trip Support offers full vacation packages for both short and long stay vacations. You can get a short stay vacation for as low as $700.",
    "How do I get a cheap travel package for fall?" => "The simplest way to get a cheap vacation package is by booking everything in one place. This way, you will not only benefit from bargains, and deals on hotels, flights, and activities, but it also makes it easier to coordinate your trip. You save more overall on a bundle, and with over 1,000 destinations on Trip Support, there is no place you cannot go.",
    "Can I book my fall vacation now and pay later?" => "Yes. Trip Support allows you to book now and pay later on your flights and hotel bookings. If you are booking in advance of your trip, you will benefit from early bird offers and travel credit free, as your vacation will be fully paid for in cash before you travel.",
  ),
);
$summer = array(
  array(
    "What are the best places to visit in the fall?" => "Fall is often a good time to travel, not only because it’s still beautiful out there but because fewer people are traveling. This often translates to lower fares and great bargains on hotels. Some of the places you can visit before you are locked in for winter include Yellowstone National Park, Scottish Highlands, Bavaria, England’s Lake District, Canadian Rockies, Switzerland, New York City, Sonoma, Napa Valley, Arizona, etc.",
    "How much does a fall vacation package cost?" => "A fall vacation package depends on how much you want to travel. Trip Support offers full vacation packages for both short and long stay vacations. You can get a short stay vacation for as low as $700.",
    "How do I get a cheap travel package for fall?" => "The simplest way to get a cheap vacation package is by booking everything in one place. This way, you will not only benefit from bargains, and deals on hotels, flights, and activities, but it also makes it easier to coordinate your trip. You save more overall on a bundle, and with over 1,000 destinations on Trip Support, there is no place you cannot go.",
    "Can I book my fall vacation now and pay later?" => "Yes. Trip Support allows you to book now and pay later on your flights and hotel bookings. If you are booking in advance of your trip, you will benefit from early bird offers and travel credit free, as your vacation will be fully paid for in cash before you travel.",
  ),
);
$winter = array(
  array(
    "What are the best places to visit in the fall?" => "Fall is often a good time to travel, not only because it’s still beautiful out there but because fewer people are traveling. This often translates to lower fares and great bargains on hotels. Some of the places you can visit before you are locked in for winter include Yellowstone National Park, Scottish Highlands, Bavaria, England’s Lake District, Canadian Rockies, Switzerland, New York City, Sonoma, Napa Valley, Arizona, etc.",
    "How much does a fall vacation package cost?" => "A fall vacation package depends on how much you want to travel. Trip Support offers full vacation packages for both short and long stay vacations. You can get a short stay vacation for as low as $700.",
    "How do I get a cheap travel package for fall?" => "The simplest way to get a cheap vacation package is by booking everything in one place. This way, you will not only benefit from bargains, and deals on hotels, flights, and activities, but it also makes it easier to coordinate your trip. You save more overall on a bundle, and with over 1,000 destinations on Trip Support, there is no place you cannot go.",
    "Can I book my fall vacation now and pay later?" => "Yes. Trip Support allows you to book now and pay later on your flights and hotel bookings. If you are booking in advance of your trip, you will benefit from early bird offers and travel credit free, as your vacation will be fully paid for in cash before you travel.",
  ),
);

?>

<div class="mx-auto max-w-7xl bg-white">
  <section class="py-8 relative overflow-hidden px-4">
    <div class="container">
      <div class="d-flex d-flex-wrap">
        <div class="w-full">
          <div class="mx-auto my-6 lg:my-12">
            <span class="font-normal text-tiny block text-rose-600">
              FAQs
            </span>
            <h2 class="font-extrabold text-xl sm:text-3xl text-gray-900 mb-4">
              <?php the_title(); ?>, Frequently Asked Questions
            </h2>
            <p class="sm:text-base text-tiny text-body-color">
              See below for frequently asked questions.
            </p>
          </div>
        </div>
      </div>
      <div class="flex">
        <div class="w-full ">
          <div class="accordion" id="accordionExample5">
            <!-- Fall Faqs Links -->
            <?php if ($post->post_name == 'fall-vacation-packages') { ?>
              <?php $num = 0;
              $ques_id = "fallQone";
              $bs_target = "#fallOne";
              $aria_controls = "fallOne";
              $ans_id = "fallOne";
              $labelledby = "fallQone";

              foreach ($fall as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Spring Faqs Links -->
            <?php if ($post->post_name == 'spring-vacation-packages') { ?>
              <?php $num = 0;
              $ques_id = "springQone";
              $bs_target = "#springOne";
              $aria_controls = "springOne";
              $ans_id = "springOne";
              $labelledby = "springQone";

              foreach ($spring as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Summer Faqs Links -->
            <?php if ($post->post_name == 'summer-vacation-packages') { ?>
              <?php $num = 0;
              $ques_id = "summerQone";
              $bs_target = "#summerOne";
              $aria_controls = "summerOne";
              $ans_id = "summerOne";
              $labelledby = "summerQone";

              foreach ($summer as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Winter Faqs Links -->
            <?php if ($post->post_name == 'winter-vacation-packages') { ?>
              <?php $num = 0;
              $ques_id = "winterQone";
              $bs_target = "#winterOne";
              $aria_controls = "winterOne";
              $ans_id = "winterOne";
              $labelledby = "winterQone";

              foreach ($winter as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>


          </div>
        </div>
      </div>
    </div>
  </section>
</div>
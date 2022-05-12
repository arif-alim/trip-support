<?php
$aruba_faqs = array(
  array(
    "Are Aruba Resorts safe?" => " Yes, resorts in Aruba are safe.",
    "Can I travel to Aruba right now?" => "Yes, Aruba is open for travel. Entry rules depend on whether or not you’re vaccinated.",
    "How long should my Aruba vacation be?" => "4-5 days is the perfect amount of time for a quick Aruba getaway.",
    "Can I book my trip to Aruba now and pay later?" => "Yes, you can book your travel now and pay later through our book now and pay later option.",
    "How much does an Aruba vacation package cost?" => "The average cost for a 7-day trip to Aruba would be around $2000 depending on the season and dates you are choosing.",
    "When is the best time to book an all-inclusive trip to Aruba?" => "January, November and December is considered to be the best time to book an all-inclusive trip to Aruba.",
  ),
);

$cuba_faqs = array(
  array(
    "Are Cuba Resorts safe?" => " Yes, resorts in Cuba are very safe as the rest of Cuba.",
    "Can I travel to Cuba right now?" => "Yes, Cuba is open for travel. Entry rules depend on whether or not you’re vaccinated.",
    "Can I book my travel to Cuba now and pay later?" => "Yes, you can book your travel now and pay later through our book now and pay later option.",
    "When is the best time to book an all-inclusive trip to Cuba?" => "The best time to book an all-inclusive trip to Cuba is considered to be September.",
    "How long should my Cuba vacation be?" => "The minimum time to travel to Cuba must be at least 4 days.",
    "How much does a Cuba vacation package cost?" => "The average price of a 7-day trip to Cuba is around $850 depending on the season.",
  ),
);

$dominican_faqs = array(
  array(
    "Can I book my travel to Dominican Republic now and pay later?" => "Yes! Trip Support offers a \“Book Now and Pay Later\” service, where payments can be made in installments before your vacations and flights. Uniquely, we offer this service without the need for credit checks and extensive documentation.",
    "Can I make reservations for last minute travel?" => "When it comes to Dominican Republic, you’ll want to book your vacation package three months in advance. The resorts can fill up quickly, especially during the dry season.",
    "Can I travel to Dominican Republic right now?" => "Yes! You can book an all-inclusive vacation package to Dominican Republic right now and be on a plane within two days.",
    "When is the best time to book an all-inclusive trip to Dominican Republic?" => "March is the perfect time to visit Dominican Republic. March is considered to be apart of the country’s off-peak season for tourism, resulting in lower rates, but the weather is still very pleasant this time of year.",
    "I have to cancel my vacation to Dominican Republic. Can my tickets be refunded?" => "If your booking is eligible for cancellation, you might be subject to a $250 airline cancellation fee. However, most discounted airline tickets are non-refundable. For more information, please contact us at <a href='tel:1-833-606-0606'>1-833-606-0606</a>",
    "How do I get a cheap travel package to/from Dominican Republic?" => "At Trip Support, we believe that travel should be affordable for all. For a cheap travel package to/from Dominican Republic, please check out our Dominican Republic vacation packages located at <a href='https://tripsupport.ca/vacations/?selectedTab=vacation'>https://tripsupport.ca/vacations/?selectedTab=vacation</a>",
  ),
);

$hawaii_faqs = array(
  array(
    "When is the best time to book an all-inclusive trip to Hawaii?" => "The best time to visit Hawaii is during its dry season, which occurs from December to April. Surfing is at its peak during this time, and so is whale watching as well. Prices tend to be at their highest during these months too, so booking your trip to Hawaii from October to November may be a better option for you.",
    "Can I travel to Hawaii right now?" => "Yes! You can book your flight and be on a plane to Hawaii within less than a week.",
    "Can I book my travel to Hawaii now and pay later?" => "Yes! Trip Support offers a “Book Now and Pay Later” service, where payments can be made in installments before your vacations and flights. Uniquely, we offer this service without the need for credit checks and extensive documentation.",
    "Can I make reservations for last-minute travel? " => "When it comes to Hawaii, you’ll want to book your vacation package three months in advance. The resorts can fill up quickly, especially during the months from December to April.",
    "I have to cancel my vacation to Hawaii. Can my tickets be refunded?" => "If your booking is eligible for cancellation, you might be subject to a $250 airline cancellation fee. However, most discounted airline tickets are non-refundable. For more information, please contact us at <a href='tel:1-833-606-0606'>1-833-606-0606</a>",
    "How do I get a cheap travel package to/from Hawaii?" => "At Trip Support, we believe that travel should be affordable for all. For a cheap travel package to/from Hawaii, please check out our Hawaii vacation packages located at <a href='https://tripsupport.ca/?selectedTab=flight-hotel'>https://tripsupport.ca/?selectedTab=flight-hotel</a>",
  ),
);

$jamaica_faqs = array(
  array(
    "Can I travel to Jamaica right now?" => "Yes, Jamaica is open for tourism.",
    "Are Jamaica Resorts safe?" => "Yes, resorts in Jamaica are fairly safe. They provide 24-hour security on site.",
    "Can I book my trip to Jamaica now and pay later?" => "Yes, you can book your travel now and pay later through our book now and pay later option.",
    "When is the best time to book an all-inclusive trip to Jamaica?" => "November until mid-December is considered to be the best time to book an all-inclusive trip to Jamaica.",
    "How long should my Jamaica vacation be?" => "7- 10 days is a good length for a trip to Jamaica.",
    "How much does a Jamaica vacation package cost?" => "The average price of a 7-day trip to Jamaica is around $1100 depending on the dates and season.",
  ),
);

$mexico_faqs = array(
  array(
    "Can I travel to Mexico right now?" => "Yes, Mexico is open for travel. Entry rules depend on whether or not you’re vaccinated.",
    "Are Mexico Resorts safe?" => " Yes, resorts in Mexico are safe.",
    "Can I book my travel to Mexico now and pay later?" => "Yes, you can book your travel now and pay later through our book now and pay later option.",
    "When is the best time to book an all-inclusive trip to Mexico?" => "The best time to book an all-inclusive trip to Mexico is considered to be the end of May through October.",
    "How long should my Mexico vacation be?" => "The minimum time to travel to Mexico must be at least 5 days.",
    "How much does a Cuba vacation package cost?" => "The average price of a 7-day trip to Mexico is around $1000 depending on the season.",
  ),
);
?>


<div class="mx-auto max-w-7xl bg-white">
  <section class="relative overflow-hidden px-4">
    <div class="container">
      <div class="d-flex d-flex-wrap">
        <div class="w-full">
          <div class="mx-auto mb-6 lg:mb-10">
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
            <!-- Aruba Faqs Links -->
            <?php if ($post->post_name == 'aruba') { ?>
              <?php $num = 0;
              $ques_id = "arubaQone";
              $bs_target = "#arubaOne";
              $aria_controls = "arubaOne";
              $ans_id = "arubaOne";
              $labelledby = "arubaQone";

              foreach ($aruba_faqs as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-6xl text-slate-900 text-justify">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Cuba Faqs Links -->
            <?php if ($post->post_name == 'cuba') { ?>
              <?php $num = 0;
              $ques_id = "cubaQone";
              $bs_target = "#cubaOne";
              $aria_controls = "cubaOne";
              $ans_id = "cubaOne";
              $labelledby = "cubaQone";

              foreach ($cuba_faqs as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-6xl text-slate-900 text-justify">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Dominican Republic Faqs Links -->
            <?php if ($post->post_name == 'dominican-republic') { ?>
              <?php $num = 0;
              $ques_id = "dominicanQone";
              $bs_target = "#dominicanOne";
              $aria_controls = "dominicanOne";
              $ans_id = "dominicanOne";
              $labelledby = "dominicanQone";

              foreach ($dominican_faqs as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-6xl text-slate-900 text-justify">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Hawaii Faqs Links -->
            <?php if ($post->post_name == 'hawaii') { ?>
              <?php $num = 0;
              $ques_id = "hawaiiQone";
              $bs_target = "#hawaiiOne";
              $aria_controls = "hawaiiOne";
              $ans_id = "hawaiiOne";
              $labelledby = "hawaiiQone";

              foreach ($hawaii_faqs as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-6xl text-slate-900 text-justify">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Jamaica Faqs Links -->
            <?php if ($post->post_name == 'jamaica') { ?>
              <?php $num = 0;
              $ques_id = "jamaicaQone";
              $bs_target = "#jamaicaOne";
              $aria_controls = "jamaicaOne";
              $ans_id = "jamaicaOne";
              $labelledby = "jamaicaQone";

              foreach ($jamaica_faqs as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-6xl text-slate-900 text-justify">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Mexico Faqs Links -->
            <?php if ($post->post_name == 'mexico') { ?>
              <?php $num = 0;
              $ques_id = "mexicoQone";
              $bs_target = "#mexicoOne";
              $aria_controls = "mexicoOne";
              $ans_id = "mexicoOne";
              $labelledby = "mexicoQone";

              foreach ($mexico_faqs as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-4 text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-4 text-tiny prose max-w-6xl text-slate-900 text-justify">
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
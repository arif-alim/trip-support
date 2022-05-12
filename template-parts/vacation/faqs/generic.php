<?php
$adult_only_resorts = array(
  array(
    "What are the top Adults-Only All-Inclusive Resorts?" => "Secrets Wild Orchid Montego Bay, Jamaica, Excellence Playa Mujeres Cancun, Mexico, Excellence Punta Cana, Dominican Republic, and Warwick Paradise Island - Nassau, The Bahamas are some of the top Adults-only all-inclusive resorts.",
    "Which is the cheapest place to book an Adults-Only All-Inclusive resort?" => "<b>TripSupport.ca</b> is the cheapest place to book you an adults-only all-inclusive resort. ",
    "How do I get the best deal on an Adults-Only resort?" => "By picking the right time and booking your trip in advance, you can get the best deal on an adults-only resort.",
    "Can I book my adults-only vacation and pay later?" => "Yes, with our <b>‘Book Now Pay Later’</b> option, you can book your adults-only vacation.",
    "Where are the Adults-Only 5-star all-inclusive resorts?" => "You can find these resorts in almost all of the Caribbean islands. ",
  ),
);

$all_inclusive_vacations = array(
  array(
    "How do I get the best deal on an all-inclusive resort?" => "Pick the right time and book your trip early.",
    "What does it mean when a vacation is all-inclusive?" => "An all-inclusive vacation includes; flight, stay, unlimited food, drinks, activities, and entertainment without any surprise costs.",
    "Are all-inclusive vacations worth it?" => "Yes, all-inclusive vacations are worth it as it includes all the essentials in the booking price.",
    "Does an all-inclusive vacation include alcohol and food?" => "Yes, an all-inclusive vacation includes alcohol and food.",
    "Can I book an all-inclusive vacation now and pay later?" => "Yes, you can with our ‘Book Now and Pay Later' option.",
    "Which is the cheapest place to book an all-inclusive vacation?" => "<b>TripSupport.ca<b> is the cheapest place to book an all-inclusive vacation.",
  ),
);

$best_family_resorts = array(
  array(
    "What is the cheapest place to book family vacations?" => "<b>TripSupport.ca</b> is the cheapest place to book you an adults-only all-inclusive resort. ",
    "How do I get the best deal on a family resort?" => "By picking the right time and booking your trip in advance, you can get the best deal on a family resort.",
    "Can I book my family vacations and pay later?" => "Yes, with our ‘Book Now Pay Later’ option, you can book your family vacation.",
    "Which are the best family resorts in 2022?" => "The Atlantis Resorts, Bahamas, San Juan Marriott Resort & Stellaris Casino, Puerto Rico, and Grand Wailea Resort Hotel & Spa, Hawaii are among the best family resorts in 2022.",
    "What are 5-star all-inclusive resorts for families?" => "Hotel Riu Palace Costa Rica, The Ritz-Carlton Residences, Waikiki Beach, Hawaii, Hyatt Regency Grand Reserve Puerto Rico, and Melia Nassau Beach. ",
  ),
);

$luxury_vacations = array(
  array(
    "How do I get the best deals on all-inclusive Luxury Vacations?" => "Check for package deals, choose the right time, and book your tickets in advance.",
    "What are the best places to book all-inclusive Luxury vacations for a family?" => "You can either book the Caribbean or the Europeans Luxury vacations.",
    "What are the best places to book an all-inclusive Luxury Vacation for Couples?" => "You can opt for any Caribbean vacation with an adults-only resort for a romantic getaway.",
    "Can I book my luxury vacation now and pay later?" => "Yes, you can with our ‘Book Now Pay Later' option.",
  ),
);

$seasonal_vacations = array(
  array(
    "Tehran Question #1" => "Tehran Answer #1",
    "Tehran Question #2" => "Tehran Answer #2",
    "Tehran Question #3" => "Tehran Answer #3",
    "Tehran Question #4" => "Tehran Answer #4",
    "Tehran Question #5" => "Tehran Answer #5",
    "Tehran Question #6" => "Tehran Answer #6",
  ),
);

$tour_operators = array(
  array(
    "What are the best Canadian Tour Operators?" => "Sunwing, WestJet, Air Canada and Transat are the best Canadian tour operators.",
    "Who are the main Tour Operators in Canada?" => "Sunwing, WestJet, Air Canada and Transat are the best Canadian tour operators.",
  ),
);
?>

<div class="mx-auto max-w-7xl bg-white">
  <section class="py-8 lg:py-16 relative overflow-hidden px-4">
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
            <!-- Adults Only Resorts Faqs Links -->
            <?php if ($post->post_name == 'adults-only-resorts') { ?>
              <?php $num = 0;
              $ques_id = "adultsQone";
              $bs_target = "#adultsOne";
              $aria_controls = "adultsOne";
              $ans_id = "adultsOne";
              $labelledby = "adultsQone";

              foreach ($adult_only_resorts as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- All Inclusive Resorts Faqs Links -->
            <?php if ($post->post_name == 'all-inclusive-vacations') { ?>
              <?php $num = 0;
              $ques_id = "inclusiveQone";
              $bs_target = "#inclusiveOne";
              $aria_controls = "inclusiveOne";
              $ans_id = "inclusiveOne";
              $labelledby = "inclusiveQone";

              foreach ($all_inclusive_vacations as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Best Family Resorts Faqs Links -->
            <?php if ($post->post_name == 'best-family-resorts') { ?>
              <?php $num = 0;
              $ques_id = "familyQone";
              $bs_target = "#familyOne";
              $aria_controls = "familyOne";
              $ans_id = "familyOne";
              $labelledby = "familyQone";

              foreach ($best_family_resorts as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Luxury Vacations Faqs Links -->
            <?php if ($post->post_name == 'luxury-vacations') { ?>
              <?php $num = 0;
              $ques_id = "luxuryQone";
              $bs_target = "#luxuryOne";
              $aria_controls = "luxuryOne";
              $ans_id = "luxuryOne";
              $labelledby = "luxuryQone";

              foreach ($luxury_vacations as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Seasonal Vacations Faqs Links -->
            <?php if ($post->post_name == 'seasonal-vacations') { ?>
              <?php $num = 0;
              $ques_id = "seasonalQone";
              $bs_target = "#seasonalOne";
              $aria_controls = "seasonalOne";
              $ans_id = "seasonalOne";
              $labelledby = "seasonalQone";

              foreach ($seasonal_vacations as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
                        <?php echo "$ans" ?>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            <?php } ?>

            <!-- Tour Operators Faqs Links -->
            <?php if ($post->post_name == 'tour-operators') { ?>
              <?php $num = 0;
              $ques_id = "tourQone";
              $bs_target = "#tourOne";
              $aria_controls = "tourOne";
              $ans_id = "tourOne";
              $labelledby = "tourQone";

              foreach ($tour_operators as $faq)
                $num++; { ?>
                <?php foreach ($faq as $ques => $ans) { ?>
                  <div class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0 font-semibold" id="<?php echo $ques_id++ ?>">
                      <button class="accordion-button relative collapsed flex items-center w-full p-[16px] text-base text-gray-800 text-left bg-white border-0 rounded-none transition focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo $bs_target++ ?>" aria-expanded="false" aria-controls="<?php echo $aria_controls++ ?>">
                        <?php echo "$ques" ?>
                      </button>
                    </h2>
                    <div id="<?php echo $ans_id++ ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $labelledby++ ?>">
                      <div class="accordion-body p-[16px] text-tiny prose max-w-5xl text-slate-900">
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
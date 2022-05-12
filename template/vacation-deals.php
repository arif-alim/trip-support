<?php /* Template Name: Vacation Deals */ ?>
<?php /* Template Post Type: vacation_deals */ ?>

<?php get_header(); ?>
<main>

  <!-- Banner Section -->
  <?php get_template_part('/template-parts/vacation/banner/generic') ?>


  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 pb-12 lg:mb-6 px-0" aria-labelledby="contact-heading">
    <search-box-component country="CA" lang="en-US" active="vacation" url="https://secure.tripsupport.ca">
    </search-box-component>
  </section>


  <!-- Vacation Cards -->
  <!-- <div class="relative max-w-7xl mx-auto mt-4 mb-12 lg:mb-16 lg:mt-8">
    <?php /* get_template_part('/template-parts/vacation/internal-pages/cards/top-vacations'); */ ?>
  </div> -->

  <!-- Main Content -->
  <div class="mx-auto bg-white">
    <section class="relative overflow-hidden ">
      <!-- Page Specific Content goes here -->
      <?php switch ($post->post_name) {
        case 'adults-only-resorts':
          get_template_part('/template-parts/vacation/content/adults-only-resorts');
          break;
        case 'all-inclusive-vacations':
          get_template_part('/template-parts/vacation/content/all-inclusive-vacations');
          break;
        case 'best-family-resorts':
          get_template_part('/template-parts/vacation/content/best-family-resorts');
          break;
        case 'luxury-vacations':
          get_template_part('/template-parts/vacation/content/luxury-vacations');
          break;
        case 'seasonal-vacations':
          get_template_part('/template-parts/vacation/content/seasonal-vacations');
          break;
        case 'tour-operators':
          get_template_part('/template-parts/vacation/content/tour-operators');
          break;

        default:
          get_template_part('/template-parts/vacation/content/generic');
          break;
      } ?>
    </section>
    <section class="mt-6">

      <?php switch ($post->post_name) {
        case 'all-inclusive-vacations':
          get_template_part('/template-parts/vacation/faqs/generic');
          break;
        case 'best-family-resorts':
          get_template_part('/template-parts/vacation/faqs/generic');
          break;
        case 'adults-only-resorts':
          get_template_part('/template-parts/vacation/faqs/generic');
          break;
        case 'luxury-vacations':
          get_template_part('/template-parts/vacation/faqs/generic');
          break;
          // case 'seasonal-vacations':
          //   get_template_part('/template-parts/vacation/faqs/generic');
          //   break;
        case 'tour-operators':
          get_template_part('/template-parts/vacation/faqs/generic');
          break;
      } ?>
    </section>
  </div>

  <!-- Explore Links (internal pages) -->
  <?php get_template_part('/template-parts/vacation/explore/generic'); ?>

  <!-- Newsletter -->
  <?php get_template_part('/template-parts/global/newsletter') ?>
</main>

<?php get_footer() ?>
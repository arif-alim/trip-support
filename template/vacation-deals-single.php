<?php /* Template Name: Vacation Deals Internal */ ?>
<?php /* Template Post Type: vacation_deals */ ?>

<?php get_header(); ?>
<main>

  <!-- Banner Section -->
  <?php get_template_part('/template-parts/vacation/banner/generic') ?>

  <!-- Booking Widget Section -->
  <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:mb-6" aria-labelledby="contact-heading">
    <?php echo do_shortcode('[tr_search_by_vue]') ?>
  </section>


  <!-- Main Content -->
  <div class="mx-auto max-w-7xl bg-white">
    <section class="relative overflow-hidden px-4">
      <div class="container">
        <!-- Page Specific Content goes here -->
        <?php switch ($post->post_name) {
          case 'fall-vacation-packages':
            get_template_part('/template-parts/vacation/internal-pages/content/fall');
            break;
          case 'spring-vacation-packages':
            get_template_part('/template-parts/vacation/internal-pages/content/spring');
            break;
          case 'summer-vacation-packages':
            get_template_part('/template-parts/vacation/internal-pages/content/summer');
            break;
          case 'winter-vacation-packages':
            get_template_part('/template-parts/vacation/internal-pages/content/winter');
            break;
          case 'air-canada-vacations':
            get_template_part('/template-parts/vacation/internal-pages/content/air-canada');
            break;
          case 'porter-vacations':
            get_template_part('/template-parts/vacation/internal-pages/content/porter');
            break;
          case 'signature-vacations':
            get_template_part('/template-parts/vacation/internal-pages/content/signature');
            break;
          case 'sunquest-vacations':
            get_template_part('/template-parts/vacation/internal-pages/content/sunquest');
            break;
          case 'sunwing-vacations':
            get_template_part('/template-parts/vacation/internal-pages/content/sunwing');
            break;
          case 'westjet-vacations':
            get_template_part('/template-parts/vacation/internal-pages/content/westjet');
            break;

          default:
            get_template_part('/template-parts/vacation/internal-pages/content/generic');
            break;
        } ?>


        <?php get_template_part('/template-parts/vacation/internal-pages/faqs/generic'); ?>

      </div>
    </section>
  </div>
  <!-- Explore -->
  <?php get_template_part('/template-parts/vacation/internal-pages/explore/generic') ?>
  <!-- Newsletter -->
  <?php get_template_part('/template-parts/global/newsletter') ?>
</main>

<?php get_footer() ?>

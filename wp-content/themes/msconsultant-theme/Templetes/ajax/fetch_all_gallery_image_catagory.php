<div id="tabcontent_<?= $term_name ?>" class="tabcontent">
    <div class="image_di_two">
        <?php if ($fetch_records->have_posts()): while ($fetch_records->have_posts()): $fetch_records->the_post(); ?>
            <div class="loop_img">
                <?php 
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID());
                ?>
                <a class="image-link" href="<?= $thumbnail_url ? esc_url($thumbnail_url) : get_template_directory_uri()?>" title="">
                    <img src="<?= $thumbnail_url ? esc_url($thumbnail_url) : get_template_directory_uri()?>" alt="">
                </a>
                <!-- <img  src="<?= $thumbnail_url ? esc_url($thumbnail_url) : get_template_directory_uri()?>" alt="<?= the_title_attribute(); ?>"> -->
            </div>
        <?php endwhile; else: ?>
            <p class="no_found">No Gallery Images  found</p>
        <?php endif; ?>
    </div>
</div>
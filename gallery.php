<section class="lodge-activities">
      <div class="lodge-activities-inner">
        <?php $i = 0; ?>
        <?php foreach(get_field('activities_gallery') as $img): ?>
          <div class="lodge-activities-block">
            <div class="lodge-activities-img">
              <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['caption']; ?>">
            </div>
          </div>
          <?php if($i === 0): ?>
            <div class="lodge-activities-block">
              <div class="lodge-activities-list">
                <h3>Activities</h3>
                <ul>
                  <?php foreach(get_field('activities') as $activity): ?>
                    <li><?php echo $activity['activity']; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endif; ?>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </section>

//ACF flickety slider

<section class="lodges-slider">
      <?php $images = get_field('slides'); ?>
      <?php foreach($images as $image): ?>
        <div class="lodges-slide">
          <div class="lodges-slide-img">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
          </div>
        </div>
      <?php endforeach; ?>
      <button class="slider-arrow slider-arrow-prev"></button>
      <button class="slider-arrow slider-arrow-next"></button>
    </section>

//JS for slider

(() => {
  if(document.querySelector('.lodges-slider')) {
    const slider = $('.lodges-slider');
    const flkty = slider.flickity({
      cellAlign: 'left',
      cellSelector: '.lodges-slide',
      autoPlay: 5000,
      pauseAutoPlayOnHover: true,
      wrapAround: true,
      fade: true,
      setGallerySize: true,
      pageDots: false,
      prevNextButtons: false,
    }).data('flickity');

    slider.find('.slider-arrow-prev').on('click', () => {
      flkty.previous();
    });

    slider.find('.slider-arrow-next').on('click', () => {
      flkty.next();
    });
  }
})();

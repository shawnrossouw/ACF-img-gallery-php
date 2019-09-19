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

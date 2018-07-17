
				<!-- Andrew -->
			<?php foreach ($data as $data): ?>
				<div id="portfoliolist" class="animate-box">			
					<div class="portfolio all icon" data-cat="icon">
						<div class="portfolio-wrapper">			
							<img src="<?=base_url()?>assets/picture/<?=$data->foto?>" alt="foto" />
							<div class="label">
								<div class="label-text">
									<a href="<?php echo base_url('detail_user') ?>" class="text-title"><?php echo $data->nama?></a>
									<!-- <span class="text-category">Icon</span> -->
									<div id="stars" class="starrr"></div>
								</div>
						<!-- 		<div class="label-bg"></div> -->
							</div>
						</div>
					</div>												
				<?php endforeach; ?>
			<div class="container">
    			  <?php echo $pagination ?>
    		</div>
		</div>

				
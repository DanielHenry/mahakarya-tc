<div class="row">		
	
	
	<div class="col s12 m12">
		<div class="section">
			<h5 class="center" style=" background-color:#fff; color:#666">FINAL PROJECT</h5>
			<!--   Icon Section   -->
			<div class="row" style="background-color:#fff; padding-top:30px; border-top:#0CF 1px dashed;">
			<?php  
         foreach ($h->result() as $row)  
         {  
            ?>
				<a href="<?php echo base_url();?>final_project/matakuliah/<?php echo $row->id;?>"><div class="col s12 m2 kotak2">
					<div class="gambar_kotak2"> <img src="<?php echo base_url(); ?>assets/img/folder.png" style="width:100%; height:100%;"/> </div>
					<div class="caption2">
						<p align="center"><?php echo $row->nama_matakuliah;?></p>
					</div>
				</div></a>
				<?php }?>
			</div>
		</div>
	</div>
</div>
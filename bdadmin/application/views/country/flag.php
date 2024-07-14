<div class="row">
<?php 

	$json = ' ["ae.png","au.png","bd.png","ca.png","ch.png","cn.png","de.png","eg.png","es.png","fr.png","gb.png","gh.png","hk.png","id.png","in.png","ir.png","it.png","jp.png","ke.png","kr.png","kw.png","lk.png","ma.png","mx.png","my.png","ng.png","np.png","om.png","ph.png","pk.png","pl.png","qa.png","ru.png","sa.png","se.png","sg.png","th.png","tr.png","tw.png","ua.png","us.png","za.png"] ' ;
	
	$dir_contents = json_decode($json);
	
	
    foreach ($dir_contents as $file) {
       
		$url = 'https://b2bitem.com/upload/country/128X128/' . $file;	
			?>
				
					<div class="col-md-2">
						<div style="text-align:center">
							<img src="<?=$url?>"><br>
							<span><?=$file;?></span>
						</div>
					</div>
				
			<?php 
           // echo '<img src="', $dir, '/', $file, '" alt="', $file, '" />';
        
	}


?>
</div>
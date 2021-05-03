<?php 	
		include('simple_html_dom.php');
		$websiteurl="https://merojob.com/";
		$html = file_get_html($websiteurl);

		//"et_pb_section et_pb_section_2 et_section_regular"

		foreach($html->find('.card-body p-0') as $postDiv){
			foreach ($postDiv->find('a') as $a) {
				echo $a->attr['herf']."<br>";			
				}
		}
 ?>
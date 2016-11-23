<?php
require 'db.php';
				$query="SELECT * FROM chat ORDER BY id DESC";
				$result=mysql_query($query,$db);
				while($row=mysql_fetch_array($result)):
			?>
			<div id="chat_data">
				<span id="name"><?= $row['name'];?>:</span>
				<span id="message"><?= $row['message'];?></span>
				<span id="time"><?= formatDate($row['date']);?></span>
				
			</div>
				<?php endwhile; ?>
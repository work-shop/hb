	<ul class="collaborators">

		<?php 
			$collaborators = get_field('collaborators');

			if ( !empty( $collaborators ) ) : 

				$coll_accumulator = "";

				foreach ( $collaborators as $collaborator ) {
					if ( !empty( $collaborator['name']) ) {
						if ( !empty( $collaborator['link'] ) ) {
							$coll_accumulator .= '<a href="'.$collaborator['link'].'">'
							   				  . ''.$collaborator['name'].'</a>';
						} else {
							$coll_accumulator .= ''.$collaborator['name'].'';
						}
					}
				}

				if ( !empty( $coll_accumulator ) ) echo '<li>Collaborators:</li>' . $coll_accumulator;

			endif; 

		?>

	</ul>
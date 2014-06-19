	<ul class="collaborators col-sm-10">

		<?php 
			$collaborators = get_field('collaborators');

			if ( !empty( $collaborators ) ) : 

				$coll_accumulator = "";

				foreach ( $collaborators as $collaborator ) {
					if ( !empty( $collaborator['name']) ) {
						if ( !empty( $collaborator['link'] ) ) {
							$coll_accumulator .= '<a href="'.$collaborator['link'].'">'
							   				  . '<h4>'.$collaborator['name'].'</h4></a>';
						} else {
							$coll_accumulator .= '<h4>'.$collaborator['name'].'</h4>';
						}
					}
				}

				if ( !empty( $coll_accumulator ) ) echo '<li>Collaborators:</li>' . $coll_accumulator;

			endif; 

		?>

	</ul>
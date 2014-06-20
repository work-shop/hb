	<ul class="collaborators col-sm-10">

		<?php 
			$collaborators = get_field('collaborators');

			if ( !empty( $collaborators ) ) : 

				$coll_accumulator = "";
				$target = count( $collaborators );

				foreach ( $collaborators as $i => $collaborator ) {
					if ( !empty( $collaborator['name']) ) {
						if ( !empty( $collaborator['link'] ) ) {
							$coll_accumulator .= '<li><a href="'.$collaborator['link'].'">'
							   				  . $collaborator['name'].'</a>';
						} else {
							$coll_accumulator .= '<li>'.$collaborator['name'];
						}

						if ( $i < $target - 1 ) { $coll_accumulator .= ',</li>'; }
						else { $coll_accumulator .= '</li>'; }
					}
				}

				if ( !empty( $coll_accumulator ) ) echo '<li>Collaborators:</li>' . $coll_accumulator;

			endif; 

		?>

	</ul>
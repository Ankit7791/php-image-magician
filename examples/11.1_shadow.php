<?php

	require_once('image_lib/image_lib_class.php');

	/*	Purpose: Open image
     *	Usage:	 resize('filename.type')
     * 	Params:	 filename.type - the filename to open
     */
	$imageLibObj = new imageLib('sample_images/racecar.jpg');


	/*	Purpose: Add a drop shadow to your image
     *	Usage:	 addShadow([shadow angle], [blur], [bg color])
     * 	Params:	 shadow angle - The angle of the shadow to display. 0 will 
	 *				surround the image in a shadow.
	 *			 blur - The amount of blur to apply. The higher the amount, the 
     *				bigger the shadow.
	 *			bg color - The background color behind the shadow
     */
	$imageLibObj -> addShadow(45, 15);


	/*	Purpose: Save image
     *	Usage:	 saveImage('[filename.type]', [quality])
     * 	Params:	 filename.type - the filename and file type to save as
 	 * 			 quality - (optional) 0-100 (100 being the highest (default))
     *				Only applies to jpg & png only
     */
	$imageLibObj -> saveImage('output_11.1.png', 100);

?>

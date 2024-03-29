<div class="row fileupload-buttonbar">
	<div class="span7">
		<!-- The fileinput-button span is used to style the file input field as button -->
		<span class="btn btn-mini fileinput-button"> <i class="icon-plus"></i> <span>Add files...</span>
			<?php
            if ($this -> hasModel()) :
                echo CHtml::activeFileField($this -> model, $this -> attribute, $htmlOptions) . "\n";
            else :
                echo CHtml::fileField($name, $this -> value, $htmlOptions) . "\n";
            endif;
            ?>
		</span>
		<button type="submit" class="btn btn-mini start">
			<i class="icon-upload"></i>
			<span>Start upload</span>
		</button>
		<button type="reset" class="btn btn-mini cancel">
			<i class="icon-ban-circle"></i>
			<span>Cancel upload</span>
		</button>
		<button type="button" class="btn btn-mini delete">
			<i class="icon-trash"></i>
			<span>Delete</span>
		</button>
		<input type="checkbox" class="toggle">
	</div>
	<div class="span5">
		<!-- The global progress bar -->
		<div class="progress progress-success progress-striped active fade">
			<div class="bar" style="width:0%;"></div>
		</div>
	</div>
</div>
<!-- The loading indicator is shown during image processing -->
<div class="fileupload-loading"></div>
<br>
<!-- The table listing the files available for upload/download -->
<table class="table table-striped">
	<tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody>
</table>

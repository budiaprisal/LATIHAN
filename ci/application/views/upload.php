<?php

echo $error['file_name'];
echo form_open_multipart('homeproses/uploadfile'); ?>
<a href='<?= base_url("index.php/home/downloadfile/$error[file_name]") ?>' target="_BLANK">download file</a>
<input type="file" name="berkas" accept="image/*" />
<input type="submit" value="upload file" />

</form>
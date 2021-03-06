<?php

echo bootstrap_table_title($title);

echo form_open_multipart('admin/profile/add', array('class' => 'form-horizontal'));
echo bootstrap_form_input('title', NULL, array('class' => 'span6', 'placeholder' => 'Judul', 'label' => 'Judul' . bootstrap_text_important()));
echo bootstrap_form_textarea('content', NULL, array('class' => 'ckeditor span8', 'rows' => 6, 'label' => 'Isi Profile'));
echo bootstrap_form_upload('image', NULL, array('class' => 'span6', 'placeholder' => 'Gambar', 'label' => 'Gambar'));
echo bootstrap_control_group(NULL, bootstrap_text_important('Catatan : Jika terdapat tanda asterisk/bintang (*) maka field harus diisi.'));
echo bootstrap_form_submit(NULL, 'Simpan', array('class' => 'btn btn-primary', 'after' => anchor('admin/profile', 'Kembali', 'class="btn btn-danger btn-link-bootstrap"')));
echo form_close();
?>

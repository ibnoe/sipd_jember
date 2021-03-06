<?php
echo bootstrap_table_title($title);

echo form_open('admin/instance/edit/'.$id, array('class' => 'form-horizontal'));
echo bootstrap_form_input('name', $instance->name, array('class' => 'span6', 'placeholder' => 'Nama', 'label' => 'Nama' . bootstrap_text_important()));
echo bootstrap_form_textarea('description', $instance->description, array('class' => 'span8', 'rows' => 6, 'label' => 'Keterangan'));
//echo bootstrap_form_dropdown('sub_district_id', array($instance->sub_district_id), array('class' => 'span6', 'list' => $sub_district_list, 'label' => 'Kecamatan'));
echo bootstrap_control_group(NULL,bootstrap_text_important('Catatan : Jika terdapat tanda asterisk/bintang (*) maka field harus diisi.'));
echo bootstrap_form_submit(NULL, 'Simpan', array('class' => 'btn btn-primary', 'after' => anchor('admin/instance', 'Kembali', 'class="btn btn-danger btn-link-bootstrap"')));
echo form_close();
?>
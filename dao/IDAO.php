<?php
Interface IDAO{

    public function add($obj);
    public function update($obj);
    public function delete($id);
    public function getAll();
    public function getSingle($id);

}

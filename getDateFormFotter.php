<?php
    //  $selectFooter=factoryClass :: makeObject(new footerConnection,"allSelect");
    //$selectFooter2=factoryClass :: makeObject(new footerConnection);
    //$selectFooter2->numRows=$selectFooter->num_rows;
    $footer=factoryClass :: makeObject(new footerConnection);
    //$select=$footer->allSelect();
    //$input=$select->num_rows;
    $footer->insertOrUpdate($_POST);
    //$footer->item($input);
   
    //$selectFooter2->numRows=$selectFooter->num_rows;
    //echo $selectFooter->num_rows;
    //$row=$selectFooter->fetch_assoc();
    //echo $row["name"];
?>
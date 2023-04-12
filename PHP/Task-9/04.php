<?php

$filterIdName=[];
$filterIdIndex=[];
foreach(filter_list() as $id){
    array_push($filterIdIndex,filter_id($id)) ;
    array_push($filterIdName,$id);
}
echo "<pre>";
print_r(array_combine($filterIdIndex,$filterIdName));
echo "</pre>";
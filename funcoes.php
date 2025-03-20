<?php
//funções aqui

function branch_projeto(){
    return TRUE;
}

function branch_projeto($id){
    if($id>=0) return FALSE;
}
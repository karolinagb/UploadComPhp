<?php

//is_uploaded_file = verifica se o arquivo existe e se foi enviado por upload pelo html
var_dump(is_uploaded_file($_FILES['arquivo']['tmp_name']));

//Como o upload chega no php?
//Para encontrar esse arquivo pode utilizar a variável Files
var_dump($_FILES['arquivo']);

//DIR = Diretorio atual
// tmp_name = nome temporario que contem o caminho completo do arquivo
//'/a.pdf' = nome que eu quero salvar o arquivo
// move_uploaded_file = move o arquivo para outro lugar e retorna um booleano informando se deu tudo certo ou não
//tmp_name = o servidor web salva pra gente o arquivo
var_dump(move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ . '/a.pdf'));
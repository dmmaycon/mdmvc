<?php
/**
 * Arquivo contendo funções que podem ser chamadas em todo o sistema
 */

function debug($var, $continue = false) 
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    if (!$continue) {
        die();
    }
}


/**
 * Trata os textos para não permitir inserção de códigos 
 */
function sanitizar($str,$mysql=true)
{
	$str = str_replace("'","&#39;",$str);
	$str = str_replace("\"","&quot;",$str);
	$str = str_replace("<","&lt;",$str);	
	$str = str_replace(">","&gt;",$str);	

	if($mysql){
		$str = str_replace('\\',"\\\\",$str);
		$str = str_replace('\'',"\\'",$str);
	}

	return $str;
}

function desanitizar($str)
{
	$str = str_replace("&#39;" ,"'" ,$str);
	$str = str_replace("&quot;","\"",$str);
	$str = str_replace("&lt;"  ,"<" ,$str);	
	$str = str_replace("&gt;"  ,">" ,$str);	

	return $str;
}

/**
 * Passa data de "AAAA-MM-DD" para "DD/MM/AAAA"
 */
function dtoc($data)
{
	if ($data == '') return '';
	$data = explode('-', $data);
	return $data[2].'/'.$data[1].'/'.$data[0];
}

/**
* Passa data de "YYYY-MM-DD H:i:s" para "DD/MM/AAAA H:i:s"
*/
function dateTimetoc($datetime)
{
	$dataHora = dtoc(substr($datetime, 0, 10));
	$dataHora .= substr($datetime, 10, 19);
	return $dataHora;
}

/**
 * Passa data de "DD/MM/AAAA" para "AAAA-MM-DD" *
 */
function ctod($data)
{
	if ($data == '') return '';
	$dttrat = explode("/",$data);
	return $dttrat[2]."-".$dttrat[1]."-".$dttrat[0];
}


//-- Passa data de "AAAA-MM-DD" para "AAAAMMDD"
function dtomsd($data)
{
	return str_replace('-','',$data);
}

//-- Passa data de "DD/MM/AAAA" para "AAAAMMDD"
function ctomsd($data)
{
	return substr($data,6,4).substr($data,3,2).substr($data,0,2);
}

//-- Passa data de "AAAAMMDD" para "DD/MM/AAAA"
function msdtoc($data)
{
	//recebe o parâmetro e armazena em um array separado por -
	return substr($data,6,2).'/'.substr($data,4,2).'/'.substr($data,0,4);
}

function msdtod($data)
{
	$data = substr($data,0,4).'-'.substr($data,4,2).'-'.substr($data,6,2);
	return $data;
}

//passa a data do formato DD/MM/YYYY para DD/MM/YY
function year2digits($data)
{
	if ($data == '') return '';
	$aux = explode("/", $data);
	$dia = $aux[0];
	$mes = $aux[1];
	$ano = substr($aux[2], -2);
	$data = $dia."/".$mes."/".$ano;
	return $data;
}

function array_map_recursive($function, $arr)
{
	$result = array();
	foreach ($arr as $key => $val)
		$result[$key] = (is_array($val) ? array_map_recursive($function, $val) : $function($val));
	
	return $result;
}

/**
 * Função para abstrair o retorno de JSON com header correto
 * Caso precise utiliza a função array_map_recursive basta informar o segundo parametro como true
 * Autor: Maycon de Moraes
 */
function arrToJson(Array $arr, $recursive = false)
{
	ob_end_clean();// limpa todo o "lixo" de saida
	if ($recursive) {
		$arr = array_map_recursive('utf8_encode', $arr);
	}else{
		$arr = array_map('utf8_encode', $arr);
	}

	header('Content-Type: application/json');
	echo json_encode($arr);
	ob_end_flush(); // desativa o buffer de saida
}
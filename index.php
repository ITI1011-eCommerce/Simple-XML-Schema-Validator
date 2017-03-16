<?php

/**
 * Author: Randall Castillo
 * Author URL: http://www.randallcastillo.me
 * Date: 11/03/2017
 * Time: 09:43 AM
 * Created for the Career of Information Technologies
 * in the eCommerce course
 * Of the National Technical University
 */

function libxml_display_error($error) //Retorna la gravedad del error, la ubicacion fisica, y la linea de error
{
    $return = "<br/>\n";
    //Establece el mensaje retornado segun la gravedad del error
    switch ($error->level) {
        case LIBXML_ERR_WARNING:
            $return .= "<b>Warning $error->code</b>: "; //Una simple advertencia
            break;
        case LIBXML_ERR_ERROR:
            $return .= "<b>Error $error->code</b>: "; //Un error recuperable
            break;
        case LIBXML_ERR_FATAL:
            $return .= "<b>Fatal Error $error->code</b>: "; //Un error fatal
            break;
    }
    $return .= trim($error->message); //Retorna el mensaje del error, si es que hay.
    if ($error->file) {  //Retorna el nombre del fichero, si es que lo hay
        $return .= " in <b>$error->file</b>";
    }
    $return .= " on line <b>$error->line</b>\n"; //Retorna la línea en la que ocurrió el error
    return $return;
}

function libxml_display_errors() //Retorna lo errores en un arreglo
{
    $getErrors = libxml_get_errors(); //Recupera un array de errores
    $i = 0;
    foreach ($getErrors as $error) { //Recorre los errores y los carga en un arreglo
        $errorsArray[$i] = libxml_display_error($error);
        $i += 1;
    }
    libxml_clear_errors(); //Limpia el buffer de errores de libxml
    return $errorsArray;
}

function prepareXML($xml_param)
{
    //DOM: Document Object Mode
    $xmlDOM = new DOMDocument(); //Representa un documento XML o HTML en su totalidad
    $xmlDOM->formatOutput = true; //Formatea el documento
    $xmlDOM->loadXML($xml_param); //Cargar XML desde una cadena
    return $xmlDOM;
}

function prepareXSD($xsd_param)
{
    date_default_timezone_set('America/Costa_Rica'); //Definimos una zona horaria por defecto
    $fechaHora = date('Y_m_d_Hms'); //Cargamos una variable con la fecha-hora actual
    $xsdRoute = 'files/temp/' . $fechaHora . '_TEMP_FacturaElectronica_v3-1.xsd'; //Definimos la ruta en la que almacenaremos el archivo temporal
    $xsdDOM = new DOMDocument(); //Representa un documento XML o HTML en su totalidad
    $xsdDOM->formatOutput = true; //Formatea el documento
    $xsdDOM->loadXML($xsd_param); //Cargar XML desde una cadena
    $xsdDOM->save($xsdRoute); //Guardar el nuevo documento en el archivo
    return $xsdRoute;
}

function getConfirmation($xsd_file, $xml_file) //Recibe los elementos a comparar
{
    libxml_use_internal_errors(true); //Deshabilitar errores libxml estándares y habilitar el manejo de errores del usuario.
    $xsdDocument = prepareXSD($xsd_file); //Preparamos la cadena xsd
    $xmlDocument = prepareXML($xml_file); //Preparamos la cadena xml
    $errors = null;

    if (!$xmlDocument->schemaValidate($xsdDocument)) { //Falló la validacion del documento basandose en el esquema proporcionado?
        $result = false; //El resultado de la operacion fue negativo
        $message = 'Schema Validation Generated Errors!'; //Mensaje personalizado para comuncar el fracaso de la operacion
        $errors = libxml_display_errors(); //Carga la variable con un arreglo de errores
    } else {
        $result = true; //El resultado de la operacion fue positivo
        $message = 'Schema Validation Was Successful!'; //Mensaje personalizado para comuncar el exito de la operacion
    }
    @unlink($xsdDocument); //Eliminamos el archivo temporal
    return array( //Retorna un arreglo con los datos
        'result' => $result,
        'message' => $message,
        'errors' => $errors
    );
}

/**
 * Pruebas de funcionalidad del código
 **/

include_once 'files/xmlString.php'; //Incluimos el fichero donde tenemos la Cadena de XML
include_once 'files/xsdString.php'; //Incluimos el fichero donde tenemos la Cadena de XSD

$test = getConfirmation($xsd_str, $xml_str); //Envia la cadena de xsd y xml como parametros a la funcion, y que esta las valide

if (!$test['result']) { //El resultado de la prueba es negativo?
    echo '<h1>' . $test['message'] . '</h1>'; //Imprime el mensaje brindado
    foreach ($test['errors'] as $error) { //Recorre los errores ocurridos y los imprime uno a uno
        print $error . '<br>';
    }
} else { //Si la prueba fue exitosa
    echo '<h1>' . $test['message'] . '</h1>'; //Imprime el mensaje brindado
}

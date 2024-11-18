<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");

use \Bitrix\Main\Application as App;

$request = App::getInstance()->getContext()->getRequest();
$method = $request->getRequestMethod();

//Bitrix\Main\Diag\Debug::dump($method, $varName = '', $fileName = '');

if($method == "GET"){

    $log = "\n------------------------\n";
    $log .= date("Y.m.d G:i:s")."\n";

    \Bitrix\Main\Diag\Debug::dumpToFile($log);
}
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
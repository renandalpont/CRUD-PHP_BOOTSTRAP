<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('pet');
}


/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['pet'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $customer = $_POST['pet'];
    // $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
    
    save('pet', $customer);
    header('location: index.php');
  }
}



/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

  // $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['pet'])) {

      $customer = $_POST['pet'];
      // $customer['modified'] = $now->format("Y-m-d H:i:s");

      update('pet', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('pet', $id);
    } 
  } else {
    header('location: index.php');
  }
}



/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $customer;
  $customer = find('pet', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $customer;
  $customer = remove('pet', $id);

  header('location: index.php');
}
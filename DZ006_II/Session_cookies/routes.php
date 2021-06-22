<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	  case 'students':
        require_once('models/students.php');
		$controller = new StudentsController();
      break;
      case 'departments':
        require_once('models/departments.php');
    $controller = new DepartmentsController();
      break;
      case 'marks':
        // we need the model to query the database later in the controller
        require_once('models/marks.php');
        $controller = new MarksController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' 		=> ['home', 'error', 'login', 'validate', 'logout'],
                       'marks' 		=> ['index', 'show', 'insert', 'create', 'edit', 'update', 'delete'],
                       'students' => ['index', 'show', 'create', 'insert', 'edit', 'update', 'delete', 'authorized'],
					             'departments' => ['index', 'show', 'create', 'insert', 'edit', 'update', 'delete']);

  if (array_key_exists($controller, $controllers)) { 
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action); 
    
    } else {
      call('pages', 'error');
     
    }
  } else {
    
    call('pages', 'error');
    

  }
?>
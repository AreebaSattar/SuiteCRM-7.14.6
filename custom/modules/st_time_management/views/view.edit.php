<?php
require_once 'include/MVC/View/views/view.edit.php';

class st_time_managementViewEdit extends ViewEdit
{
    function display()
    {
        // Custom message to be displayed on the Edit View
        echo "Hello Reebs!!";

        // Call the parent display method to render the rest of the view
        parent::display();
    }
}
?>

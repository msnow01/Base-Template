<?php

function dateFormat($date){
    return date('l, M j, Y', strtotime($date));
}

function printAlert($type, $text) {
    $alert = "<div class='alert alert-dismissible fade show alert-".$type."' role='alert'>";
    $alert .= $text;
    $alert .= "<a href='' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></a></div>";
    return $alert;
}

function printModal($id, $title, $text, $submit) {
    $target = strtolower(str_replace(" ","",$title));
    echo '<div class="modal fade" id="'.$target.$id.'" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">'.$title.'</h1>
                </div>
                <div class="modal-body">'.$text.'</div>
                <div class="modal-footer">
                    <form method="post">
                        <input type="number" name="number" class="display-none" value="'.$id.'">
                        <input type="submit" name="'.$submit.'" class="btn btn-primary" value="Yes">
                    </form>
                    <a href="" class="btn btn-light" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>';
}

?>

<?

include_once('Books.php');

switch ($_GET['t']){
    case 'books':
        $books = new Books;
        $res = $books->delete($_GET['id']);

        if (!$res){
            echo 'hiba!';
        }

        break;

        default:

        break;
}

?>
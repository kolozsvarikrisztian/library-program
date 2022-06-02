<?

include_once('Application.php');

class Authors extends Application {
    private $sql = array(
        'allAuthors' => 'SELECT * FROM authors;'
    );
    public function __construct()
    {
        parent::__construct();
        
    }

    public function getAuthors() {
        $authors = $this->getResultList($this->sql['allAuthors']);
        return $authors;
    }
}


?>
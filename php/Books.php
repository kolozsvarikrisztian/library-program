<?

include_once('Application.php');

class Books extends Application{
    
    private $sql = array(
        'allBooks' => 'select * from books'
    );
    
    public function __construct()
    {
        

        parent::__construct();
        // if($this->isDbConnectionLive()){
        //     echo "Az adatbázis kapcsolat él.";
        // }
        // else{
        //     echo "Az adatbázis kapcsolat nem él.";
        // }

        // debug($this->getResultList("select * from books"));
    }

    public function getBooks(){
        $books = $this->getResultList($this->sql['allBooks']);
        return $books;
    }
}

?>
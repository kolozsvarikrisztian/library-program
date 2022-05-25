<?

include_once('Application.php');

class Books extends Application{
    
    private $sql = array(
        'allBooks' => 'SELECT
        books.title,
        authors.name AS author,
        GROUP_CONCAT(categories.name SEPARATOR ", ") AS category
      FROM books
        LEFT JOIN authors 
          ON books.author_id = authors.id
        LEFT JOIN books_categories 
          ON books_categories.book_id = books.id
        LEFT JOIN categories
          ON books_categories.id = categories.id
      GROUP BY books.title'
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
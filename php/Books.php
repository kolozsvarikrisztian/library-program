<?

include_once('Application.php');

class Books extends Application {
    private $sql = array(
        'allBooks' => 'SELECT
                        b.id, b.title, b.page_size, b.lang, a.name AS author, GROUP_CONCAT(c.name SEPARATOR ", ") AS category
                    FROM books b
                        LEFT JOIN authors a ON b.author_id = a.id
                        LEFT JOIN books_categories bc ON bc.book_id = b.id
                        LEFT JOIN categories c ON bc.category_id = c.id
                    GROUP BY b.title;',
        'booksByCategory' => 'SELECT
                        b.title, a.name AS author, GROUP_CONCAT(c.name SEPARATOR ", ") AS category
                    FROM books b
                        LEFT JOIN authors a ON b.author_id = a.id
                        LEFT JOIN books_categories bc ON bc.book_id = b.id
                        LEFT JOIN categories c ON bc.category_id = c.id
                    WHERE c.id = {id}
                    GROUP BY b.title;',
        'bookById' => 'SELECT
                        b.id, b.title, b.page_size, b.lang, a.name AS author, GROUP_CONCAT(c.name SEPARATOR ", ") AS category
                    FROM books b
                        LEFT JOIN authors a ON b.author_id = a.id
                        LEFT JOIN books_categories bc ON bc.book_id = b.id
                        LEFT JOIN categories c ON bc.category_id = c.id
                    WHERE b.id = {id}
                    GROUP BY b.title
                    LIMIT 1;'
    );
    public function __construct()
    {
        parent::__construct();
        // if($this->isDbConnectionLive()){
        //     echo "db kapcsolat él";
        // }else{
        //     echo "db kapcsolat nem él";
        // }
        // debug($this->getResultList("select * from books"));
    }

    public function getBooks() {
        $books = $this->getResultList($this->sql['allBooks']);
        return $books;
    }

    public function getBooksByCategory($categoryId) {
        if (!$this->isValidId($categoryId)){
            return array();
        }
        $params = array(
            '{id}' => $categoryId
        );
        $books = $this->getResultList(strtr($this->sql['booksByCategory'],$params));
        return $books;
    }

    public function getBookById($id) {
        if (!$this->isValidId($id)){
            return array();
        }
        $params = array(
            '{id}' => $id
        );
        $book = $this-> getSingleResult(strtr($this->sql['bookById'],$params));
        return $book;
    }

    public function delete($id)
    {
        if (!$this->isValidId($id))
        {
            return false;
        }
        $res = $this->deleteRecordById("books", $id);
        return $res;
    }
}


?>
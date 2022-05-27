<?

include_once('Application.php');

class Categories extends Application {
    private $sql = array(
        'allCategories' => 'SELECT * FROM categories c;'
    );
    public function __construct()
    {
        parent::__construct();
        
    }

    public function getCategories() {
        $categories = $this->getResultList($this->sql['allCategories']);
        return $categories;
    }
}


?>
<?php

class HomeController
{
    private $articleModel;

    public function __construct(ArticleModel $articleModel)
    {
        $this->articleModel = $articleModel;
    }

    public function index()
    {
        // Get all articles
        $articles = $this->articleModel->getAllArticles();

        // Load the view to display the list of articles
        require_once 'app/views/article/list.php';
    }

    public function show($id)
    {
        // Get the article by ID
        $article = $this->articleModel->getArticleById($id);

        if ($article) {
            // Load the view to display the individual article
            require_once 'app/views/article/show.php';
        } else {
            // Article not found, handle the error
            echo "Article not found.";
        }
    }

    // Other methods for creating, editing, updating, and deleting articles can be added here
}